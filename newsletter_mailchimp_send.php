<?php

    add_action ('wp_ajax_send_newsletter', 'send_newsletter') ;
    
    function send_newsletter(){
		$subject = $_REQUEST['subject'];
		$date = $_REQUEST['date'];
		$title = $_REQUEST['title'];
		$link = $_REQUEST['link'];
		// $title = 'https://lexcentral.com/event_calendar/newsletter';
		$mailchimp_response = contact_mailchimp($subject, $title, $date, $link);
		

        // if (!isset ($_REQUEST['title'])) {
        //     // set the return value you want on error
        //     // return value can be ANY data type (e.g., array())
        //     // echo 'fail';

        //     wp_send_json_error($mailchimp_response);
        // }

        // $id = intval ($_REQUEST['id']) ;
            // wp_send_json_error ($return_value) ;
        

		    if($mailchimp_response['status'] == 200){
		    	// $url="https://us9.api.mailchimp.com/3.0/campaigns/".$campaignId."/actions/send";
				// $sendResponse = $this->mailchimpSendRequest(null, $url);
				// echo'success';
				echo $mailchimp_response;
				wp_send_json_success($mailchimp_response) ;
		    }
		    else {
		    	wp_send_json_error($mailchimp_response);
		    }


             exit();

    }

    function contact_mailchimp ($subject, $title, $date, $link ) {
        // $data = $this->event_calendar_newsletter_description_model->get(1);
		// $compiledData = '{"recipients":{"list_id":"xxxxxx"},"type":"regular","settings":{"subject_line":"Test Subject","reply_to":"info@lexcentral.com","from_name":"Central Baptist Church"}}';

		$api_key = "auth:" . get_option('mailchimp_api_key', 'default text');
		$list_id = get_option('mailchimp_list_id', 'default text');

		$compiledData = new stdClass();
		$compiledData->settings = new stdClass();
		$compiledData->recipients = array('list_id'=> $list_id );
		$compiledData->type = 'regular';
		$compiledData->settings->title =$title;
		$compiledData->settings->subject_line = $subject;
		$compiledData->settings->reply_to = 'info@lexcentral.com';
		$compiledData->settings->from_name = 'Central Baptist Church';

		// $newsletter_meta = get_post_meta( $post->ID, false );
        
		$data_json = json_encode($compiledData);
		$url = 'https://us9.api.mailchimp.com/3.0/campaigns/';


		$curl = curl_init();
		// curl_reset($curl);
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_USERPWD, $api_key);
	    curl_setopt($curl, CURLOPT_POST,1);
	    curl_setopt($curl, CURLOPT_POSTFIELDS,$data_json);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
		$response = curl_exec($curl);
		// curl_close ($curl);

		$decodedResponse = json_decode($response);
		$campaignId = $decodedResponse->id;

		// echo $decodedResponse;

		if(!empty($campaignId)){
			//add campaign content with url
			$templateData = new stdClass();
		    $templateData->url = new stdClass();
		    // $templateData->url = $link;
		    $templateData->url = 'http://165.227.214.181/newsletter/test-newsletter/';
		    $content_json = json_encode($templateData);
		    $content_url="https://us9.api.mailchimp.com/3.0/campaigns/".$campaignId."/content";

			curl_reset($curl);
		    curl_setopt($curl, CURLOPT_URL, $content_url);
		    curl_setopt($curl, CURLOPT_USERPWD, $api_key);
		    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
		    curl_setopt($curl, CURLOPT_POSTFIELDS,$content_json);
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($content_json)));
			$content_response = curl_exec($curl);
			$decodedContentResponse = json_decode($content_response);
			// var_dump($decodedContentResponse);
			// curl_close ($curl);

			if(!isset($decodedContentResponse->status)){
				//send campaign
			    $send_url="https://us9.api.mailchimp.com/3.0/campaigns/".$campaignId."/actions/send";

				curl_reset($curl);
			    curl_setopt($curl, CURLOPT_URL, $send_url);
			    curl_setopt($curl, CURLOPT_USERPWD, $api_key);
			    curl_setopt($curl, CURLOPT_POST,1);
			    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: 0'));
				$send_response = curl_exec($curl);
				curl_close ($curl);
				echo $send_response;
			}
			else {
				return 'could not send campaign.';
			}

		}
		else {
			return 'could not update campaign content';
		}
	}


    ?>


	