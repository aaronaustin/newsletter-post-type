<?php

    //Event meta box
    function newsletter_add_meta_box() {
    //this will add the metabox for the newsletter post type
    $screens = array( 'newsletter' );

    foreach ( $screens as $screen ) {
        add_meta_box(
            'newsletter_sectionid',
            __( 'Send Newsletter', 'newsletter_textdomain' ),

            'newsletter_meta_box_callback',            
            $screen,
            'side'
        );
    }
    }
    add_action( 'add_meta_boxes', 'newsletter_add_meta_box' );

    /**
     * Prints the box content.
     *
     * @param WP_Post $post The object for the current post/page.
     */
    function newsletter_meta_box_callback( $post ) {
        // Add a nonce field so we can check for it later.
        wp_nonce_field( 'newsletter_save_meta_box_data', 'newsletter_meta_box_nonce' );

        /*
        * Use get_post_meta() to retrieve an existing value
        * from the database and use the value for the form.
        */
        // original for single retrieve.
        //https://developer.wordpress.org/reference/functions/get_post_meta/
        $value = get_post_meta( $post->ID, 'newsletter_sent_date', true );
        $ifSentSendButtonClass = !empty($value)? ' hidden' : '';
        $ifSentSentButtonClass = empty($value)? ' hidden' : '';

        echo '<div id="newsletter-sent-option" disabled class="button'  . $ifSentSentButtonClass .'">Newsletter Sent</div>
             <button id="newsletter-send-reveal" class="button button-primary send">Send Newsletter</button>
             <button id="send-newsletter" class="button button-primary hide">Are You Sure?</button>
             <button id="sending-newsletter" class="button button-primary working hide" disabled>Sending...</button>
             <button id="cancel-newsletter" class="button button-red hide">&times;</button>
             <div id="newsletter-sent" class="button hide" disabled>Newsletter Sent</div>
             <div id="newsletter-fail" class="button hide">Failed to Send.  Try again?</div>
             <input type="text" disabled id="newsletter_sent_date" name="newsletter_sent_date" value="' . $value . '" />
             <div id="sent-date-display"></div>';
    }



    /**
     * When the post is saved, saves our custom data.
     *
     * @param int $post_id The ID of the post being saved.
     */
    function newsletter_save_meta_box_data( $post_id ) {

        if ( ! isset( $_POST['newsletter_meta_box_nonce'] ) ) {
            return;
        }

        if ( ! wp_verify_nonce( $_POST['newsletter_meta_box_nonce'], 'newsletter_save_meta_box_data' ) ) {
            return;
        }

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }

        // Check the user's permissions.
        if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return;
            }

        } else {

            if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return;
            }
        }

        if ( ! isset( $_POST['newsletter_sent_date'] ) ) {
            return;
        }

        $my_data = sanitize_text_field( $_POST['newsletter_sent_date'] );

        update_post_meta( $post_id, 'newsletter_sent_date', $my_data );
    }
    add_action( 'save_post', 'newsletter_save_meta_box_data' );


?>