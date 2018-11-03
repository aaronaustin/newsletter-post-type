jQuery(document).ready(function ($) {
  var sendDateField = '#newsletter_send_date';
  var newsletterType = '#newsletter_type';

  $(sendDateField).change(function () { updateTitle(); });
  $(newsletterType).change(function () { updateTitle(); });

  var getFieldValue = function (customID, element) {
    console.log(customID);
    var key = element + '[name="acf[' + $(customID).data('key') + ']"]';
    console.log(key);
    return $(key).val();
  }
  var updateTitle = function () {
    // console.log($('#worship_date'));
    var date = getFieldValue(sendDateField, 'input');
    var formattedDate = date.substring(0, 4) + '-' + date.substring(4, 6) + '-' + date.substring(6, 8);
    var title = formattedDate + "_" + getFieldValue(newsletterType, 'select');
    $('#title').val(title);
  }

  $('#newsletter-send-reveal').click( function(e) {
    e.preventDefault();
    $(e.target).addClass('hide');
    $('#send-newsletter').removeClass('hide');
    $('#cancel-newsletter').removeClass('hide');
  })
  $('#cancel-newsletter').click( function(e) {
    e.preventDefault();
    $(e.target).addClass('hide');
    $('#send-newsletter').addClass('hide');
    $('#newsletter-send-reveal').removeClass('hide');
  })
  $('#send-newsletter').click( function(e) {
    e.preventDefault();
    alert('sending...');
    //run curl to mailchimp
    // get response in promise and change
    $.ajax({
      url: ajaxurl,
      type: 'POST',
      dataType: 'JSON',
      data: {
        // the value of data.action is the part AFTER 'wp_ajax_' in
        // the add_action ('wp_ajax_xxx', 'yyy') in the PHP above
        action: 'send_newsletter',
        // ANY other properties of data are passed to your_function()
        // in the PHP global $_REQUEST (or $_POST in this case)
        link: linkToNewsletter.myPermalink,
        title: newsletterTitle.title,
        subject: newsletterSubject.subject,
        date: newsletterDate.date,
      },
      success: function (resp) {
        if (resp.success) {
          // if you wanted to use the return value you set 
          // in your_function(), you would do so via
          // resp.data, but in this case I guess you don't
          // need it
          // $('#product-' + productID + ' .item-product-footer-vote-container').html('Thanks for your vote!');
          console.log('success: ', resp);
        }
        else {
          // this "error" case means the ajax call, itself, succeeded, but the function
          // called returned an error condition
          console.log('error: ', resp);
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        // this error case means that the ajax call, itself, failed, e.g., a syntax error
        // in your_function()
        alert('Request failed: ' + thrownError.message);
      },
    });
  })
})