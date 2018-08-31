<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Central Baptist Church Weekly Update - <?php echo $start_date; ?></title>
        <style type="text/css">
            /* /\/\/\/\/\/\/\/\/ CLIENT-SPECIFIC STYLES /\/\/\/\/\/\/\/\/ */
            #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
            .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
            .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
            body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
            table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
            img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

            /* /\/\/\/\/\/\/\/\/ RESET STYLES /\/\/\/\/\/\/\/\/ */
            body{margin:0; padding:0;}
            img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
            table{border-collapse:collapse !important;}
            body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}

            /* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */

            /* ========== Page Styles ========== */

            #bodyCell{padding:20px;}
            #templateContainer{width:600px;}

            /**
            * @tab Page
            * @section background style
            * @tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
            * @theme page
            */
            body, #bodyTable{
                /*@editable*/ background-color:#f5f5f5;
            }
            ul.date-list li{
                list-style-type: none;
            }
            li h4 {
                font-size: 18px;
                font-weight: bold;
                font-style:none;
                margin-bottom: 0;
            }
            .borderTop {
                border-top: 1px dashed #ddd;
            }
            /**
            * @tab Page
            * @section background style
            * @tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
            * @theme page
            */
            #bodyCell{
                /*@editable*/ border-top:4px solid #BBBBBB;
            }

            /**
            * @tab Page
            * @section email border
            * @tip Set the border for your email.
            */
            #templateContainer{
                box-shadow: 0 0 12px rgba(0,0,0,0.1);
            }

            /**
            * @tab Page
            * @section heading 1
            * @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
            * @style heading 1
            */
            h1{
                /*@editable*/ color:#202020 !important;
                display:block;
                /*@editable*/ font-family:Helvetica;
                /*@editable*/ font-size:30px !important;
                /*@editable*/ font-style:normal;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                /*@editable*/ letter-spacing:normal;
                margin-top:0;
                margin-right:0;
                margin-bottom:14px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }

            /**
            * @tab Page
            * @section heading 2
            * @tip Set the styling for all second-level headings in your emails.
            * @style heading 2
            */
            h2{
                /*@editable*/ color:#404040 !important;
                display:block;
                /*@editable*/ font-family:Helvetica;
                /*@editable*/ font-size:20px;
                /*@editable*/ font-style:normal;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                /*@editable*/ letter-spacing:normal;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }

            /**
            * @tab Page
            * @section heading 3
            * @tip Set the styling for all third-level headings in your emails.
            * @style heading 3
            */
            h3{
                /*@editable*/ color:#606060;
                display:block;
                /*@editable*/ font-family:Helvetica;
                /*@editable*/ font-size:18px;
                /*@editable*/ font-weight:normal;
                /*@editable*/ line-height:100%;
                /*@editable*/ letter-spacing:normal;
                margin-top:0;
                margin-right:0;
                margin-bottom:10px;
                margin-left:0;
                /*@editable*/ text-align:left;
            }

            /**
            * @tab Page
            * @section heading 4
            * @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
            * @style heading 4
            */
            h4{
                /*@editable*/ color:#808080 !important;
                display:block;
                /*@editable*/ font-family:Helvetica;
				/*@editable*/ font-size:16px;

                /*@editable*/ font-weight:normal;
                /*@editable*/ line-height:100%;
                /*@editable*/ letter-spacing:normal;
                margin-top:0;
                margin-right:0;
                margin-bottom:24px;
                margin-left:0;
                /*@editable*/ text-align:left;
			}
			span.inverse {
				background-color: #068ccd;
				padding: 6px 6px 3px 6px;
				margin-right: 8px;
				color: #fff;
				text-transform: uppercase;
				border-radius: 2px;
				font-size: 13px;
			}
            p.small {
                margin-top: 0;
                font-size: 16px;
			}
			


            /* ========== Header Styles ========== */

            /**
            * @tab Header
            * @section preheader style
            * @tip Set the background color and bottom border for your email's preheader area.
            * @theme header
            */
            #templatePreheader{
                /*@editable*/ background-color:#fff;
                border-bottom: 1px dashed #ddd;
            }

            /**
            * @tab Header
            * @section preheader text
            * @tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
            */
            .preheaderContent{
                /*@editable*/ color:#808080;
                /*@editable*/ font-family:Helvetica;
                /*@editable*/ font-size:10px;
                /*@editable*/ line-height:125%;
                /*@editable*/ text-align:left;
            }

            /**
            * @tab Header
            * @section preheader link
            * @tip Set the styling for your email's preheader links. Choose a color that helps them stand out from your text.
            */
            .preheaderContent a:link, .preheaderContent a:visited, /* Yahoo! Mail Override */ .preheaderContent a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#606060;
                /*@editable*/ font-weight:normal;
                /*@editable*/ text-decoration:none;
            }

            /**
            * @tab Header
            * @section header style
            * @tip Set the background color and borders for your email's header area.
            * @theme header
            */
            #templateHeader{
                /*@editable*/ background-color:#F4F4F4;
            }

            /**
            * @tab Header
            * @section header text
            * @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
            */
            .headerContent{
                /*@editable*/ color:#505050;
                /*@editable*/ font-family:Helvetica;
                /*@editable*/ font-size:20px;
                /*@editable*/ font-weight:bold;
                /*@editable*/ line-height:100%;
                /*@editable*/ padding-top:0;
                /*@editable*/ padding-right:0;
                /*@editable*/ padding-bottom:0;
                /*@editable*/ padding-left:0;
                /*@editable*/ text-align:left;
                /*@editable*/ vertical-align:middle;
            }

            /**
            * @tab Header
            * @section header link
            * @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
            */
            .headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#068ccd;
                /*@editable*/ font-weight:normal;
                /*@editable*/ text-decoration:none;
            }

            #headerImage{
                height:auto;
                max-width:600px;
            }

            /* ========== Body Styles ========== */

            /**
            * @tab Body
            * @section body style
            * @tip Set the background color and borders for your email's body area.
            */
            #templateBody{
                /*@editable*/ background-color:#FFFFFF;
            }

            /**
            * @tab Body
            * @section body text
            * @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
            * @theme main
            */
            .bodyContent{
                /*@editable*/ color:#505050;
                /*@editable*/ font-family:Helvetica;
                /*@editable*/ font-size:18px;
                /*@editable*/ line-height:150%;
                padding-top:20px;
                padding-right:20px;
                padding-bottom:20px;
                padding-left:20px;
                /*@editable*/ text-align:left;
            }
            .bgGray {
                background-color: #EEEEEE;
            }

            /**
            * @tab Body
            * @section body link
            * @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
            */
            .bodyContent a:link, .bodyContent a:visited, /* Yahoo! Mail Override */ .bodyContent a .yshortcuts /* Yahoo! Mail Override */{
                /*@editable*/ color:#068ccd;
                /*@editable*/ font-weight:normal;
                /*@editable*/ text-decoration:none;
            }

            .bodyContent img{
                display:inline;
                height:auto;
                max-width:560px;
            }
			a.buttonLink {
				background-color: transparent;
				color: #068ccd !important;
				/* padding: 6px 8px 4px 8px; */
				/* border-radius: 4px; */
				/* text-transform: uppercase; */
				font-size: 16px;
				/* margin: 8px 0; */
				/* border: 1px solid #068ccd; */
				
				
			}
			img[class*=wp] {
				width: 100%;
				height: auto;
			}
            /* ========== Footer Styles ========== */

            /**
            * @tab Footer
            * @section footer style
            * @tip Set the background color and borders for your email's footer area.
            * @theme footer
            */
            #templateFooter{
                /*@editable*/ background-color:#F4F4F4;
                /*@editable*/ border-top:1px solid #FFFFFF;
            }

            /**
            * @tab Footer
            * @section footer text
            * @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
            * @theme footer
            */
            .footerContent{
                /*@editable*/ color:#808080;
                /*@editable*/ font-family:Helvetica;
                /*@editable*/ font-size:10px;
                /*@editable*/ line-height:150%;
                padding-top:20px;
                padding-right:20px;
                padding-bottom:20px;
                padding-left:20px;
                /*@editable*/ text-align:left;
            }

            /**
            * @tab Footer
            * @section footer link
            * @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
            */
            .footerContent a:link, .footerContent a:visited, /* Yahoo! Mail Override */ .footerContent a .yshortcuts, .footerContent a span /* Yahoo! Mail Override */{
                /*@editable*/ color:#606060;
                /*@editable*/ font-weight:normal;
                /*@editable*/ text-decoration:none;
            }
                .audio-icon {
                    display: inline-block;
                    width: 15px;
                    height: 15px;
                    margin: 4px 8px 4px 0;
                    position: relative;
                    background-color: transparent;
                    border-radius: 50%;
                    vertical-align: middle;
                    padding: 6px;
                    background-color: #068ccd;
                }
                .audio-icon:before {
                    position:absolute;
                    content:"";
                    width: 0; 
                    height: 0; 
                    border-top: 10px solid transparent; 
                    border-right: 10px solid #fff; 
                    border-bottom: 10px solid transparent;
                    top: calc(50% - 10px);
                    left:calc(50% - 7px);
                }
                .audio-icon:after {
                    position: absolute;
                    content: "";
                    width: 3px;
                    height: 8px;
                    margin: auto;
                    background-color: #fff;
                    top: 0;
                    bottom: 0;
                    border-right: 2px solid #068ccd;
                }
                .blog-icon {
                    display: inline-block;
                    width: 15px;
                    height: 15px;
                    margin: 4px 8px 4px 0;
                    position: relative;
                    background-color: transparent;
                    border-radius: 50%;
                    vertical-align: middle;
                    padding: 6px;
                    background-color: #068ccd;
                }
                .blog-icon:before {
                    position: absolute;
                    content: "";
                    width: 0;
                    height: 0;
                    border-top: 6px solid #fff;
                    border-right: 5px solid transparent;
                    border-left: 1px solid transparent;
                    bottom: 4px;
                    left: 50%;
                }
                .blog-icon:after {
                    position: absolute;
                    content: "";
                    width: 15px;
                    height: 10px;
                    margin: auto;
                    background-color: #fff;
                    top: 0;
                    bottom: 0;
                    border-radius: 2px;
                }

            /* /\/\/\/\/\/\/\/\/ MOBILE STYLES /\/\/\/\/\/\/\/\/ */

            @media only screen and (max-width: 480px){
                /* /\/\/\/\/\/\/ CLIENT-SPECIFIC MOBILE STYLES /\/\/\/\/\/\/ */
                body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:none !important;} /* Prevent Webkit platforms from changing default text sizes */
                body{width:100% !important; min-width:100% !important;} /* Prevent iOS Mail from adding padding to the body */

                /* /\/\/\/\/\/\/ MOBILE RESET STYLES /\/\/\/\/\/\/ */
                #bodyCell{padding:10px !important;}

                /* /\/\/\/\/\/\/ MOBILE TEMPLATE STYLES /\/\/\/\/\/\/ */

                /* ======== Page Styles ======== */

                /**
                * @tab Mobile Styles
                * @section template width
                * @tip Make the template fluid for portrait or landscape view adaptability. If a fluid layout doesn't work for you, set the width to 300px instead.
                */
                #templateContainer{
                    max-width:600px !important;
                    /*@editable*/ width:100% !important;
                }

                /**
                * @tab Mobile Styles
                * @section heading 1
                * @tip Make the first-level headings larger in size for better readability on small screens.
                */
                h1{
                    /*@editable*/ font-size:30px !important;
                    /*@editable*/ line-height:100% !important;
                }

                .small h1{
                    /*@editable*/ font-size:18px !important;
                    /*@editable*/ line-height:100% !important;
                }

                /**
                * @tab Mobile Styles
                * @section heading 2
                * @tip Make the second-level headings larger in size for better readability on small screens.
                */
                h2{
                    /*@editable*/ font-size:20px !important;
                    /*@editable*/ line-height:100% !important;
                }

                /**
                * @tab Mobile Styles
                * @section heading 3
                * @tip Make the third-level headings larger in size for better readability on small screens.
                */
                h3{
                    /*@editable*/ font-size:18px !important;
                    /*@editable*/ line-height:100% !important;
                }

                /**
                * @tab Mobile Styles
                * @section heading 4
                * @tip Make the fourth-level headings larger in size for better readability on small screens.
                */
                h4{
                    /*@editable*/ font-size:16px !important;
                    /*@editable*/ line-height:100% !important;
                }

                .small h4{
                    /*@editable*/ font-size:14px !important;
                    /*@editable*/ line-height:100% !important;
                }

                p.small {
                    padding-top: 0;
                    /*@editable*/ font-size:14px !important;
                    /*@editable*/ line-height:100% !important;
                }
                tr.small {
                    padding-left: 20px;
                }

                /* ======== Header Styles ======== */

                #templatePreheader{display:none !important;} /* Hide the template preheader to save space */

                /**
                * @tab Mobile Styles
                * @section header image
                * @tip Make the main header image fluid for portrait or landscape view adaptability, and set the image's original width as the max-width. If a fluid setting doesn't work, set the image width to half its original size instead.
                */
                #headerImage{
                    height:auto !important;
                    /*@editable*/ max-width:600px !important;
                    /*@editable*/ width:100% !important;
                }

                /**
                * @tab Mobile Styles
                * @section header text
                * @tip Make the header content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
                */
                .headerContent{
                    /*@editable*/ font-size:20px !important;
                    /*@editable*/ line-height:125% !important;
                }

                /* ======== Body Styles ======== */

                /**
                * @tab Mobile Styles
                * @section body text
                * @tip Make the body content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
                */
                .bodyContent{
                    /*@editable*/ font-size:18px !important;
                    /*@editable*/ line-height:125% !important;
                }
                .bodyImage {
                    margin-bottom: 20px;
                    height:auto !important;
                    /*@editable*/ max-width:560px !important;
                    /*@editable*/ width:100% !important;
				}

                /* ======== Footer Styles ======== */

                /**
                * @tab Mobile Styles
                * @section footer text
                * @tip Make the body content text larger in size for better readability on small screens.
                */
                .footerContent{
                    /*@editable*/ font-size:14px !important;
                    /*@editable*/ line-height:115% !important;
                }
        

                .footerContent a{display:block !important;} /* Place footer social and utility links on their own lines, for easier access */
            }
        </style>
	</head>

<?php 
	//get page data
	$audio_args = array(
		'numberposts'   => 3,
		'offset'           => 0,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'post',
		'post_status'      => 'publish',
        'suppress_filters' => true ,
        'category_name' => 'audio'
	);
	$blog_args = array(
		'numberposts'   => 3,
		'offset'           => 0,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'post',
		'post_status'      => 'publish',
        'suppress_filters' => true ,
        'category_name' => 'blog'
	);
	$audio_posts = get_posts($audio_args);
	$blog_posts = get_posts($blog_args);
    $newsletter_items = get_field('newsletter_items');
    //     echo '<pre>';
    // print_r( get_field('newsletter_items')  );
    // echo '</pre>';
?>
   <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                            <tr>
                                <td align="center" valign="top">
                                    <!-- BEGIN PREHEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templatePreheader">
                                        <tr>
                                            <td valign="top" class="preheaderContent" style="padding-top:10px; padding-right:20px; padding-bottom:10px; padding-left:20px;" mc:edit="preheader_content00">
                                                Central Baptist Church Weekly Update, <?php echo date('M j, Y'); ?>
                                            </td>
                                            <!-- *|IFNOT:ARCHIVE_PAGE|* -->
                                            <td valign="top" width="180" class="preheaderContent" style="text-align: right;padding-top:10px; padding-right:20px; padding-bottom:10px; padding-left:0;" mc:edit="preheader_content01">
                                                <a href="*|ARCHIVE|*" target="_blank">View in browser</a>
                                            </td>
                                            <!-- *|END:IF|* -->
                                        </tr>
                                    </table>
                                    <!-- // END PREHEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <!-- BEGIN HEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
                                        <tr>
                                            <td valign="top" class="headerContent">
                                                <a href="http://www.lexcentral.com">
                                                    <!-- <img src="<?php //echo site_url(); ?>addons/shared_addons/themes/lexcentralNew/img/central-baptist-newsandnotes.png" style="max-width:600px;" id="headerImage" mc:label="header_image" mc:edit="header_image" mc:allowdesigner mc:allowtext /> -->
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END HEADER -->
                                </td>
                            </tr>
                            <tr>
								<?php the_post();?>
                                <td align="center" valign="top">
                                    <!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
										<tr>
											<td colspan="2" valign="top" class="bodyContent" style="font-size: 18px; padding: 40px 50px" mc:edit="body_content">
												<?php echo the_post_thumbnail(); ?>
											</td>
										</tr>
                                        <tr>
                                            <td colspan="2" valign="top" class="bodyContent" style="background-color:#F8F8F8;" mc:edit="body_content">
                                                <h1 style="text-align: center; font-size: 18px; margin-top: 10px;">Weekly Update</h1>
                                                <h2 style="text-align: center"> <?php echo date('M j, Y'); ?></h2>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" class="bodyContent" style="font-size: 18px;" mc:edit="body_content">
                                                <?php echo the_content(); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top" class="bodyContent" style="font-size: 18px;" mc:edit="body_content">
                                                <h1 style="font-size: 24px;">Latest Audio Posts</h1>
                                                <?php foreach($audio_posts as $p): ?>
                                                <span class="audio-icon"></span>
                                                <span><?php echo $p->post_title; ?></span>
                                                <?php endforeach; ?>
                                            </td>
										</tr>
                                        <tr>
                                            <td colspan="2" valign="top" class="bodyContent" style="font-size: 18px;" mc:edit="body_content">
                                                <h1 style="font-size: 24px;">Latest Blog Posts</h1>
                                                <?php foreach($blog_posts as $p): ?>
                                                <span class="blog-icon"></span>
                                                <span><?php echo $p->post_title; ?></span>
                                                <?php endforeach; ?>
                                            </td>
										</tr>

										
                                        <?php foreach($newsletter_items as $item): ?>
											<tr>
												<td colspan="2" valign="top" class="bodyContent" style="font-size: 18px;" mc:edit="body_content">
													<a href="<?php echo $item['post']->post_name; ?>">
														<?php echo get_the_post_thumbnail($item['post']->ID, 'full', array('class' => 'bodyImage', 'style' => 'max-width:560px; margin-bottom: 20px;')) ?>
													</a>
													<a href="<?php echo $item->url; ?>" style="text-decoration: none;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
														<h1 style="font-size: 24px;"><?php echo $item['replace_title'] ? $item['title'] : $item['post']->post_title ?></h1>
														<?php if($item['post']->start_date): ?>
															<h4 style="font-size: 16px;"><span class="inverse"><?php echo date('M j', strtotime($item['post']->start_date)); ?></span><?php echo date('l \a\t g:i a', strtotime($item['post']->start_date)); ?></h4>
														<?php endif; ?>
													</a>
														
														<?php echo wp_trim_words( $item['post']->post_content, $num_words = 10, $more = '… ' ); ?>
														<?php if(str_word_count($item['post']->post_content) > $num_words): ?>
															<p>
															<a class="buttonLink" href="<?php echo $item['post']->post_name; ?>" style="-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;text-decoration:none;">More &#10132;</a>
														<?php endif; ?>
												</td>
											</tr>
                                    	<?php endforeach; ?>
                                        <tr>
                                            <td valign="top" colspan="2" class="bodyContent borderTop" style="font-size: 18px; text-align:center;" mc:edit="body_content">
                                                <a style="white-space:nowrap" href="http://www.lexcentral.com">&nbsp;&nbsp;Visit our website&nbsp;&nbsp;</a>  <a style="white-space:nowrap" href="http://www.facebook.com/LexCentral/">&nbsp;&nbsp;Find us on Facebook&nbsp;&nbsp;</a> <a style="white-space:nowrap" href="*|FORWARD|*">&nbsp;&nbsp;Forward to Friend&nbsp;&nbsp;</a>
                                            </td>
                                        </tr>

                                    </table>
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                        </table>
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>