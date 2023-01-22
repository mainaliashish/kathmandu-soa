<?php
if(!empty($contact_info)){
    $university_name = $contact_info['0']['university_name'];
    $full_location = $contact_info['0']['full_location'];
    $pos_box_num = $contact_info['0']['post_box_num'];
    $con1 = $contact_info['0']['contact_information1'];
    $cont2 = $contact_info['0']['contact_information2'];
    $web_link = $contact_info['0']['web_site_link'];
    $banner = base_url().'uploads/'.$contact_info['0']['banner'];

}else{
    $university_name = '';
    $full_location = '';
    $pos_box_num = '';
    $con1 = '';
    $cont2 = '';
    $web_link ='';
    $banner = '';
}




?>
<!-- start footer -->
        <div class="bottom">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-sm-6 col-md-3 bottom-widget">
                        <div id="themeum_about_widget-3" class="widget widget_themeum_about_widget">
                            <h3 class="widget-title">Reach Us</h3>
                            <div class="about-desc">
                            <?php echo $university_name;?>
                                <br><?php echo $full_location; ?>
                                <br> <?php echo $con1; ?>
                                <br><?php echo $cont2; ?> 
                                <br> <?php echo $web_link; ?> 
                            </div>
                            <ul class="themeum-about-info">
                                <li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a class="youtube" href="#" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 bottom-widget">
                        <div id="nav_menu-3" class="widget widget_nav_menu">
                            <h3 class="widget-title">Programs</h3>
                            <div class="menu-resourse-container">
                                <ul id="menu-resourse" class="menu">
                                    <li id="menu-item-1763" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1763"><a href="#">Forms and Admision materials</a></li>
                                    <li id="menu-item-1764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1764"><a href="#">Guidance Documents</a></li>
                                    <li id="menu-item-1765" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1765"><a href="#">Hardcopy</a></li>
                                    <li id="menu-item-1766" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1766"><a href="#">FAQs</a></li>
                                    <li id="menu-item-1767" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1767"><a href="#">Professional Education</a></li>
                                    <li id="menu-item-1768" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1768"><a href="#">Courses in Education</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 bottom-widget">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h3 class="widget-title">Resourse</h3>
                            <div class="menu-resourse-container">
                                <ul id="menu-resourse-1" class="menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1763"><a href="#">Forms and Admision materials</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1764"><a href="#">Guidance Documents</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1765"><a href="#">Hardcopy</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1766"><a href="#">FAQs</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1767"><a href="#">Professional Education</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1768"><a href="#">Courses in Education</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 bottom-widget">
                        <div id="text-3" class="widget widget_text">
                            <h3 class="widget-title">Newsletter</h3>
                            <div class="textwidget">
                                <div class="footer-widgets-newsletter">
                <p>Enter your email and we'll send you more information of courses and scholarship.</p>
            <script type="text/javascript">
                (function() {
                    if (!window.mc4wp) {
                        window.mc4wp = {
                             listeners: [],
                        forms: {
                                on: function(event, callback) {
                                    window.mc4wp.listeners.push({
                                          event: event,
                               callback: callback
                                               });
                                                    }
                                                }
                                            }
                                        }
                                    })();
                                    </script>
                                    <!-- MailChimp for WordPress v4.1.0 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1603" method="post" data-id="1603" data-name="">
                                        <div class="mc4wp-form-fields">
                             <div class="mchimp-newsletter">
                                <p>
                                 <input type="email" name="EMAIL" placeholder="Your email address" required />
                                    <input type="submit" value="Sign up" />
                                                </p>
                                            </div>
                                            <div style="display: none;">
               <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                </div>
                   <input type="hidden" name="_mc4wp_timestamp" value="1494676848" />
                   <input type="hidden" name="_mc4wp_form_id" value="1603" />
                   <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                   </div>
             <div class="mc4wp-response"></div>
                                    </form>
                                    <!-- / MailChimp for WordPress Plugin -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/#footer-->
        <footer id="footer" class="footer-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        © Copyright Kathmandu University. Design &amp; Development by Walkers Tech </div>
                    <!-- end row -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
    </div>
    <!-- #page -->
     <script type="text/javascript">
    (function() {
        function addEventListener(element, event, handler) {
            if (element.addEventListener) {
                element.addEventListener(event, handler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + event, handler);
            }
        }

        function maybePrefixUrlField() {
            if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                this.value = "http://" + this.value;
            }
        }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if (urlFields && urlFields.length > 0) {
            for (var j = 0; j < urlFields.length; j++) {
                addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
            }
        } /* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if (testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for (var i = 0; i < dateFields.length; i++) {
                if (!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if (!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }

    })();
    </script>
    <!--[if lte IE 8]>
    <style>
        .attachment:focus {
            outline: #1e8cbe solid;
        }
        .selected.attachment {
            outline: #1e8cbe solid;
        }
    </style>
    <![endif]-->
    <script type="text/html" id="tmpl-media-frame">
        <div class="media-frame-menu"></div>
        <div class="media-frame-title"></div>
        <div class="media-frame-router"></div>
        <div class="media-frame-content"></div>
        <div class="media-frame-toolbar"></div>
        <div class="media-frame-uploader"></div>
    </script>
    <script type="text/html" id="tmpl-media-modal">
        <div class="media-modal wp-core-ui">
            <button type="button" class="button-link media-modal-close"><span class="media-modal-icon"><span class="screen-reader-text">Close media panel</span></span>
            </button>
            <div class="media-modal-content"></div>
        </div>
        <div class="media-modal-backdrop"></div>
    </script>
    <script type="text/html" id="tmpl-uploader-window">
        <div class="uploader-window-content">
            <h1>Drop files to upload</h1>
        </div>
    </script>
    <script type="text/html" id="tmpl-uploader-editor">
        <div class="uploader-editor-content">
            <div class="uploader-editor-title">Drop files to upload</div>
        </div>
    </script>
    <script type="text/html" id="tmpl-uploader-inline">
        <# var messageClass=d ata.message ? 'has-upload-message' : 'no-upload-message'; #>
            <# if ( data.canClose ) { #>
                <button class="close dashicons dashicons-no"><span class="screen-reader-text">Close uploader</span></button>
                <# } #>
                    <div class="uploader-inline-content {{ messageClass }}">
                        <# if ( data.message ) { #>
                            <h2 class="upload-message">{{ data.message }}</h2>
                            <# } #>
                                <div class="upload-ui">
                                    <h2 class="upload-instructions drop-instructions">Drop files anywhere to upload</h2>
                                    <p class="upload-instructions drop-instructions">or</p>
                                    <button type="button" class="browser button button-hero">Select Files</button>
                                </div>
                                <div class="upload-inline-status"></div>
                                <div class="post-upload-ui">
                                    <p class="max-upload-size">Maximum upload file size: 1 MB.</p>
                                    <# if ( data.suggestedWidth && data.suggestedHeight ) { #>
                                        <p class="suggested-dimensions">
                                            Suggested image dimensions: {{data.suggestedWidth}} &times; {{data.suggestedHeight}}
                                        </p>
                                        <# } #>
                                </div>
                    </div>
    </script>
    <script type="text/html" id="tmpl-media-library-view-switcher">
        <a href="/wordpress/educon/?mode=list" class="view-list">
            <span class="screen-reader-text">List View</span>
        </a>
        <a href="/wordpress/educon/?mode=grid" class="view-grid current">
            <span class="screen-reader-text">Grid View</span>
        </a>
    </script>
    <script type="text/html" id="tmpl-uploader-status">
        <h2>Uploading</h2>
        <button type="button" class="button-link upload-dismiss-errors"><span class="screen-reader-text">Dismiss Errors</span></button>
        <div class="media-progress-bar">
            <div></div>
        </div>
        <div class="upload-details">
            <span class="upload-count">
                <span class="upload-index"></span> / <span class="upload-total"></span>
            </span>
            <span class="upload-detail-separator">&ndash;</span>
            <span class="upload-filename"></span>
        </div>
        <div class="upload-errors"></div>
    </script>
    <script type="text/html" id="tmpl-uploader-status-error">
        <span class="upload-error-filename">{{{ data.filename }}}</span>
        <span class="upload-error-message">{{ data.message }}</span>
    </script>
    <script type="text/html" id="tmpl-edit-attachment-frame">
        <div class="edit-media-header">
            <button class="left dashicons <# if ( ! data.hasPrevious ) { #> disabled <# } #>"><span class="screen-reader-text">Edit previous media item</span></button>
            <button class="right dashicons <# if ( ! data.hasNext ) { #> disabled <# } #>"><span class="screen-reader-text">Edit next media item</span></button>
        </div>
        <div class="media-frame-title"></div>
        <div class="media-frame-content"></div>
    </script>
    <script type="text/html" id="tmpl-attachment-details-two-column">
        <div class="attachment-media-view {{ data.orientation }}">
            <div class="thumbnail thumbnail-{{ data.type }}">
                <# if ( data.uploading ) { #>
                    <div class="media-progress-bar">
                        <div></div>
                    </div>
                    <# } else if ( data.sizes && data.sizes.large ) { #>
                        <img class="details-image" src="{{ data.sizes.large.url }}" draggable="false" alt="" />
                        <# } else if ( data.sizes && data.sizes.full ) { #>
                            <img class="details-image" src="{{ data.sizes.full.url }}" draggable="false" alt="" />
                            <# } else if ( -1===j Query.inArray( data.type, [ 'audio', 'video' ] ) ) { #>
                                <img class="details-image icon" src="{{ data.icon }}" draggable="false" alt="" />
                                <# } #>
                                    <# if ( 'audio'===d ata.type ) { #>
                                        <div class="wp-media-wrapper">
                                            <audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none">
                                                <source type="{{ data.mime }}" src="{{ data.url }}" />
                                            </audio>
                                        </div>
                                        <# } else if ( 'video'===d ata.type ) { var w_rule='' ; if ( data.width ) { w_rule='width: ' + data.width + 'px;'; } else if ( wp.media.view.settings.contentWidth ) { w_rule='width: ' + wp.media.view.settings.contentWidth + 'px;'; } #>
                                            <div style="{{ w_rule }}" class="wp-media-wrapper wp-video">
                                                <video controls="controls" class="wp-video-shortcode" preload="metadata" <# if ( data.width ) { #>width="{{ data.width }}"
                                                    <# } #>
                                                        <# if ( data.height ) { #>height="{{ data.height }}"
                                                            <# } #>
                                                                <# if ( data.image && data.image.src !==d ata.icon ) { #>poster="{{ data.image.src }}"
                                                                    <# } #>>
                                                                        <source type="{{ data.mime }}" src="{{ data.url }}" />
                                                </video>
                                            </div>
                                            <# } #>
                                                <div class="attachment-actions">
                                                    <# if ( 'image'===d ata.type && ! data.uploading && data.sizes && data.can.save ) { #>
                                                        <button type="button" class="button edit-attachment">Edit Image</button>
                                                        <# } else if ( 'pdf'===d ata.subtype && data.sizes ) { #>
                                                            Document Preview
                                                            <# } #>
                                                </div>
            </div>
        </div>
        <div class="attachment-info">
            <span class="settings-save-status">
                <span class="spinner"></span>
            <span class="saved">Saved.</span>
            </span>
            <div class="details">
                <div class="filename"><strong>File name:</strong> {{ data.filename }}</div>
                <div class="filename"><strong>File type:</strong> {{ data.mime }}</div>
                <div class="uploaded"><strong>Uploaded on:</strong> {{ data.dateFormatted }}</div>
                <div class="file-size"><strong>File size:</strong> {{ data.filesizeHumanReadable }}</div>
                <# if ( 'image'===d ata.type && ! data.uploading ) { #>
                    <# if ( data.width && data.height ) { #>
                        <div class="dimensions"><strong>Dimensions:</strong> {{ data.width }} &times; {{ data.height }}</div>
                        <# } #>
                            <# } #>
                                <# if ( data.fileLength ) { #>
                                    <div class="file-length"><strong>Length:</strong> {{ data.fileLength }}</div>
                                    <# } #>
                                        <# if ( 'audio'===d ata.type && data.meta.bitrate ) { #>
                                            <div class="bitrate">
                                                <strong>Bitrate:</strong> {{ Math.round( data.meta.bitrate / 1000 ) }}kb/s
                                                <# if ( data.meta.bitrate_mode ) { #>
                                                    {{ ' ' + data.meta.bitrate_mode.toUpperCase() }}
                                                    <# } #>
                                            </div>
                                            <# } #>
                                                <div class="compat-meta">
                                                    <# if ( data.compat && data.compat.meta ) { #>
                                                        {{{ data.compat.meta }}}
                                                        <# } #>
                                                </div>
            </div>
            <div class="settings">
                <label class="setting" data-setting="url">
                    <span class="name">URL</span>
                    <input type="text" value="{{ data.url }}" readonly />
                </label>
                <# var maybeReadOnly=d ata.can.save || data.allowLocalEdits ? '' : 'readonly'; #>
                    <label class="setting" data-setting="title">
                        <span class="name">Title</span>
                        <input type="text" value="{{ data.title }}" {{ maybeReadOnly }} />
                    </label>
                    <# if ( 'audio'===d ata.type ) { #>
                        <label class="setting" data-setting="artist">
                            <span class="name">Artist</span>
                            <input type="text" value="{{ data.artist || data.meta.artist || '' }}" />
                        </label>
                        <label class="setting" data-setting="album">
                            <span class="name">Album</span>
                            <input type="text" value="{{ data.album || data.meta.album || '' }}" />
                        </label>
                        <# } #>
                            <label class="setting" data-setting="caption">
                                <span class="name">Caption</span>
                                <textarea {{ maybeReadOnly }}>{{ data.caption }}</textarea>
                            </label>
                            <# if ( 'image'===d ata.type ) { #>
                                <label class="setting" data-setting="alt">
                                    <span class="name">Alt Text</span>
                                    <input type="text" value="{{ data.alt }}" {{ maybeReadOnly }} />
                                </label>
                                <# } #>
                                    <label class="setting" data-setting="description">
                                        <span class="name">Description</span>
                                        <textarea {{ maybeReadOnly }}>{{ data.description }}</textarea>
                                    </label>
                                    <label class="setting">
                                        <span class="name">Uploaded By</span>
                                        <span class="value">{{ data.authorName }}</span>
  </label>
        <# if ( data.uploadedToTitle ) { #>
            <label class="setting">
                <span class="name">Uploaded To</span>
                    <# if ( data.uploadedToLink ) { #>
                    <span class="value"><a href="{{ data.uploadedToLink }}">{{ data.uploadedToTitle }}</a></span>
                        <# } else { #>
                         <span class="value">{{ data.uploadedToTitle }}</span>
                            <# } #>
                                </label>
                                        <# } #>
                                            <div class="attachment-compat"></div>
            </div>
            <div class="actions">
                <a class="view-attachment" href="{{ data.link }}">View attachment page</a>
                <# if ( data.can.save ) { #> |
                    <a href="post40a9.html?post={{%20data.id%20}}&amp;action=edit">Edit more details</a>
                    <# } #>
                        <# if ( ! data.uploading && data.can.remove ) { #> |
                            <button type="button" class="button-link delete-attachment">Delete Permanently</button>
                            <# } #>
            </div>
        </div>
    </script>
    <script type="text/html" id="tmpl-attachment">
        <div class="attachment-preview js--select-attachment type-{{ data.type }} subtype-{{ data.subtype }} {{ data.orientation }}">
            <div class="thumbnail">
                <# if ( data.uploading ) { #>
                    <div class="media-progress-bar">
                        <div style="width: {{ data.percent }}%"></div>
                    </div>
                    <# } else if ( 'image'===d ata.type && data.sizes ) { #>
                        <div class="centered">
                            <img src="{{ data.size.url }}" draggable="false" alt="" />
                        </div>
                        <# } else { #>
                            <div class="centered">
                                <# if ( data.image && data.image.src && data.image.src !==d ata.icon ) { #>
                                    <img src="{{ data.image.src }}" class="thumbnail" draggable="false" alt="" />
                                    <# } else if ( data.sizes && data.sizes.medium ) { #>
                                        <img src="{{ data.sizes.medium.url }}" class="thumbnail" draggable="false" alt="" />
                                        <# } else { #>
                                            <img src="{{ data.icon }}" class="icon" draggable="false" alt="" />
                                            <# } #>
                            </div>
                            <div class="filename">
                                <div>{{ data.filename }}</div>
                            </div>
                            <# } #>
            </div>
            <# if ( data.buttons.close ) { #>
                <button type="button" class="button-link attachment-close media-modal-icon"><span class="screen-reader-text">Remove</span></button>
                <# } #>
        </div>
        <# if ( data.buttons.check ) { #>
            <button type="button" class="button-link check" tabindex="-1"><span class="media-modal-icon"></span><span class="screen-reader-text">Deselect</span></button>
            <# } #>
                <# var maybeReadOnly=d ata.can.save || data.allowLocalEdits ? '' : 'readonly'; if ( data.describe ) { if ( 'image'===d ata.type ) { #>
                    <input type="text" value="{{ data.caption }}" class="describe" data-setting="caption" placeholder="Caption this image&hellip;" {{ maybeReadOnly }} />
                    <# } else { #>
                        <input type="text" value="{{ data.title }}" class="describe" data-setting="title" <# if ( 'video'===d ata.type ) { #> placeholder="Describe this video&hellip;"
                        <# } else if ( 'audio'===d ata.type ) { #>
                            placeholder="Describe this audio file&hellip;"
                            <# } else { #>
                                placeholder="Describe this media file&hellip;"
                                <# } #> {{ maybeReadOnly }} />
                                    <# } } #>
    </script>
    <script type="text/html" id="tmpl-attachment-details">
        <h2>
            Attachment Details          <span class="settings-save-status">
                <span class="spinner"></span>
                <span class="saved">Saved.</span>
            </span>
        </h2>
        <div class="attachment-info">
            <div class="thumbnail thumbnail-{{ data.type }}">
                <# if ( data.uploading ) { #>
                    <div class="media-progress-bar">
                        <div></div>
                    </div>
                    <# } else if ( 'image'===d ata.type && data.sizes ) { #>
                        <img src="{{ data.size.url }}" draggable="false" alt="" />
                        <# } else { #>
                            <img src="{{ data.icon }}" class="icon" draggable="false" alt="" />
                            <# } #>
            </div>
            <div class="details">
                <div class="filename">{{ data.filename }}</div>
                <div class="uploaded">{{ data.dateFormatted }}</div>
                <div class="file-size">{{ data.filesizeHumanReadable }}</div>
                <# if ( 'image'===d ata.type && ! data.uploading ) { #>
                    <# if ( data.width && data.height ) { #>
                        <div class="dimensions">{{ data.width }} &times; {{ data.height }}</div>
                        <# } #>
                            <# if ( data.can.save && data.sizes ) { #>
                                <a class="edit-attachment" href="{{ data.editLink }}&amp;image-editor" target="_blank">Edit Image</a>
                                <# } #>
                                    <# } #>
                                        <# if ( data.fileLength ) { #>
                                            <div class="file-length">Length: {{ data.fileLength }}</div>
                                            <# } #>
                                                <# if ( ! data.uploading && data.can.remove ) { #>
                                                    <button type="button" class="button-link delete-attachment">Delete Permanently</button>
                                                    <# } #>
                                                        <div class="compat-meta">
                                                            <# if ( data.compat && data.compat.meta ) { #>
                                                                {{{ data.compat.meta }}}
                                                                <# } #>
                                                        </div>
            </div>
        </div>
        <label class="setting" data-setting="url">
            <span class="name">URL</span>
            <input type="text" value="{{ data.url }}" readonly />
        </label>
        <# var maybeReadOnly=d ata.can.save || data.allowLocalEdits ? '' : 'readonly'; #>
            <label class="setting" data-setting="title">
                <span class="name">Title</span>
                <input type="text" value="{{ data.title }}" {{ maybeReadOnly }} />
            </label>
            <# if ( 'audio'===d ata.type ) { #>
                <label class="setting" data-setting="artist">
                    <span class="name">Artist</span>
                    <input type="text" value="{{ data.artist || data.meta.artist || '' }}" />
                </label>
                <label class="setting" data-setting="album">
                    <span class="name">Album</span>
                    <input type="text" value="{{ data.album || data.meta.album || '' }}" />
                </label>
                <# } #>
                    <label class="setting" data-setting="caption">
                        <span class="name">Caption</span>
                        <textarea {{ maybeReadOnly }}>{{ data.caption }}</textarea>
                    </label>
                    <# if ( 'image'===d ata.type ) { #>
                        <label class="setting" data-setting="alt">
                            <span class="name">Alt Text</span>
                            <input type="text" value="{{ data.alt }}" {{ maybeReadOnly }} />
                        </label>
                        <# } #>
                            <label class="setting" data-setting="description">
                                <span class="name">Description</span>
                                <textarea {{ maybeReadOnly }}>{{ data.description }}</textarea>
                            </label>
    </script>
    <script type="text/html" id="tmpl-media-selection">
        <div class="selection-info">
            <span class="count"></span>
            <# if ( data.editable ) { #>
                <button type="button" class="button-link edit-selection">Edit Selection</button>
                <# } #>
                    <# if ( data.clearable ) { #>
                        <button type="button" class="button-link clear-selection">Clear</button>
                        <# } #>
        </div>
        <div class="selection-view"></div>
    </script>
    <script type="text/html" id="tmpl-attachment-display-settings">
        <h2>Attachment Display Settings</h2>
        <# if ( 'image'===d ata.type ) { #>
            <label class="setting">
                <span>Alignment</span>
                <select class="alignment" data-setting="align" <# if ( data.userSettings ) { #>
                    data-user-setting="align"
                    <# } #>>
                        <option value="left">
                            Left </option>
                        <option value="center">
                            Center </option>
                        <option value="right">
                            Right </option>
                        <option value="none" selected>
                            None </option>
                </select>
            </label>
            <# } #>
                <div class="setting">
                    <label>
                        <# if ( data.model.canEmbed ) { #>
                            <span>Embed or Link</span>
                            <# } else { #>
                                <span>Link To</span>
                                <# } #>
                                    <select class="link-to" data-setting="link" <# if ( data.userSettings && ! data.model.canEmbed ) { #>
                                        data-user-setting="urlbutton"
                                        <# } #>>
                                            <# if ( data.model.canEmbed ) { #>
                                                <option value="embed" selected>
                                                    Embed Media Player </option>
                                                <option value="file">
                                                    <# } else { #>
                                                        <option value="none" selected>
                                                            None </option>
                                                        <option value="file">
                                                            <# } #>
                                                                <# if ( data.model.canEmbed ) { #>
                                                                    Link to Media File
                                                                    <# } else { #>
                                                                        Media File
                                                                        <# } #>
                                                        </option>
                                                        <option value="post">
                                                            <# if ( data.model.canEmbed ) { #>
                                                                Link to Attachment Page
                                                                <# } else { #>
                                                                    Attachment Page
                                                                    <# } #>
                                                        </option>
                                                        <# if ( 'image'===d ata.type ) { #>
                                                            <option value="custom">
                                                                Custom URL </option>
                                                            <# } #>
                                    </select>
                    </label>
                    <input type="text" class="link-to-custom" data-setting="linkUrl" />
                </div>
                <# if ( 'undefined' !==t ypeof data.sizes ) { #>
                    <label class="setting">
                        <span>Size</span>
                        <select class="size" name="size" data-setting="size" <# if ( data.userSettings ) { #>
                            data-user-setting="imgsize"
                            <# } #>>
                                <# var size=d ata.sizes[ 'thumbnail']; if ( size ) { #>
                                    <option value="thumbnail">
                                        Thumbnail &ndash; {{ size.width }} &times; {{ size.height }}
                                    </option>
                                    <# } #>
                                        <# var size=d ata.sizes[ 'medium']; if ( size ) { #>
                                            <option value="medium">
                                                Medium &ndash; {{ size.width }} &times; {{ size.height }}
                                            </option>
                                            <# } #>
                                                <# var size=d ata.sizes[ 'large']; if ( size ) { #>
                                                    <option value="large">
                                                        Large &ndash; {{ size.width }} &times; {{ size.height }}
                                                    </option>
                                                    <# } #>
                                                        <# var size=d ata.sizes[ 'full']; if ( size ) { #>
                                                            <option value="full" selected='selected'>
                                                                Full Size &ndash; {{ size.width }} &times; {{ size.height }}
                                                            </option>
                                                            <# } #>
                        </select>
                    </label>
                    <# } #>
    </script>
    <script type="text/html" id="tmpl-gallery-settings">
        <h2>Gallery Settings</h2>
        <label class="setting">
            <span>Link To</span>
            <select class="link-to" data-setting="link" <# if ( data.userSettings ) { #>
                data-user-setting="urlbutton"
                <# } #>>
                    <option value="post" <# if ( ! wp.media.galleryDefaults.link || 'post'==w p.media.galleryDefaults.link ) { #>selected="selected"
                        <# } #>> Attachment Page </option>
                    <option value="file" <# if ( 'file'==w p.media.galleryDefaults.link ) { #>selected="selected"
                        <# } #>> Media File </option>
                    <option value="none" <# if ( 'none'==w p.media.galleryDefaults.link ) { #>selected="selected"
                        <# } #>> None </option>
            </select>
        </label>
        <label class="setting">
            <span>Columns</span>
            <select class="columns" name="columns" data-setting="columns">
                <option value="1" <# if ( 1==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 1 </option>
                <option value="2" <# if ( 2==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 2 </option>
                <option value="3" <# if ( 3==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 3 </option>
                <option value="4" <# if ( 4==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 4 </option>
                <option value="5" <# if ( 5==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 5 </option>
                <option value="6" <# if ( 6==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 6 </option>
                <option value="7" <# if ( 7==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 7 </option>
                <option value="8" <# if ( 8==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 8 </option>
                <option value="9" <# if ( 9==w p.media.galleryDefaults.columns ) { #>selected="selected"
                    <# } #>> 9 </option>
            </select>
        </label>
        <label class="setting">
            <span>Random Order</span>
            <input type="checkbox" data-setting="_orderbyRandom" />
        </label>
        <label class="setting size">
            <span>Size</span>
            <select class="size" name="size" data-setting="size" <# if ( data.userSettings ) { #>
                data-user-setting="imgsize"
                <# } #>
                    >
                    <option value="thumbnail">
                        Thumbnail </option>
                    <option value="medium">
                        Medium </option>
                    <option value="large">
                        Large </option>
                    <option value="full">
                        Full Size </option>
            </select>
        </label>
    </script>
    <script type="text/html" id="tmpl-playlist-settings">
        <h2>Playlist Settings</h2>
        <# var emptyModel=_ .isEmpty( data.model ), isVideo='video'===d ata.controller.get( 'library').props.get( 'type'); #>
            <label class="setting">
                <input type="checkbox" data-setting="tracklist" <# if ( emptyModel ) { #> checked="checked"
                <# } #> />
                    <# if ( isVideo ) { #>
                        <span>Show Video List</span>
                        <# } else { #>
                            <span>Show Tracklist</span>
                            <# } #>
            </label>
            <# if ( ! isVideo ) { #>
                <label class="setting">
                    <input type="checkbox" data-setting="artists" <# if ( emptyModel ) { #> checked="checked"
                    <# } #> />
                        <span>Show Artist Name in Tracklist</span>
                </label>
                <# } #>
                    <label class="setting">
                        <input type="checkbox" data-setting="images" <# if ( emptyModel ) { #> checked="checked"
                        <# } #> />
                            <span>Show Images</span>
                    </label>
    </script>
    <script type="text/html" id="tmpl-embed-link-settings">
        <label class="setting link-text">
            <span>Link Text</span>
            <input type="text" class="alignment" data-setting="linkText" />
        </label>
        <div class="embed-container" style="display: none;">
            <div class="embed-preview"></div>
        </div>
    </script>
    <script type="text/html" id="tmpl-embed-image-settings">
        <div class="thumbnail">
            <img src="{{ data.model.url }}" draggable="false" alt="" />
        </div>
        <label class="setting caption">
            <span>Caption</span>
            <textarea data-setting="caption" />
        </label>
        <label class="setting alt-text">
            <span>Alt Text</span>
            <input type="text" data-setting="alt" />
        </label>
        <div class="setting align">
            <span>Align</span>
            <div class="button-group button-large" data-setting="align">
                <button class="button" value="left">
                    Left </button>
                <button class="button" value="center">
                    Center </button>
                <button class="button" value="right">
                    Right </button>
                <button class="button active" value="none">
                    None </button>
            </div>
        </div>
        <div class="setting link-to">
            <span>Link To</span>
            <div class="button-group button-large" data-setting="link">
                <button class="button" value="file">
                    Image URL </button>
                <button class="button" value="custom">
                    Custom URL </button>
                <button class="button active" value="none">
                    None </button>
            </div>
            <input type="text" class="link-to-custom" data-setting="linkUrl" />
        </div>
    </script>
    <script type="text/html" id="tmpl-image-details">
        <div class="media-embed">
            <div class="embed-media-settings">
                <div class="column-image">
                    <div class="image">
                        <img src="{{ data.model.url }}" draggable="false" alt="" />
                        <# if ( data.attachment && window.imageEdit ) { #>
                            <div class="actions">
                                <input type="button" class="edit-attachment button" value="Edit Original" />
                                <input type="button" class="replace-attachment button" value="Replace" />
                            </div>
                            <# } #>
                    </div>
                </div>
                <div class="column-settings">
                    <label class="setting caption">
                        <span>Caption</span>
                        <textarea data-setting="caption">{{ data.model.caption }}</textarea>
                    </label>
                    <label class="setting alt-text">
                        <span>Alternative Text</span>
                        <input type="text" data-setting="alt" value="{{ data.model.alt }}" />
                    </label>
                    <h2>Display Settings</h2>
                    <div class="setting align">
                        <span>Align</span>
                        <div class="button-group button-large" data-setting="align">
                            <button class="button" value="left">
                                Left </button>
                            <button class="button" value="center">
                                Center </button>
                            <button class="button" value="right">
                                Right </button>
                            <button class="button active" value="none">
                                None </button>
                        </div>
                    </div>
                    <# if ( data.attachment ) { #>
                        <# if ( 'undefined' !==t ypeof data.attachment.sizes ) { #>
                            <label class="setting size">
                                <span>Size</span>
                                <select class="size" name="size" data-setting="size" <# if ( data.userSettings ) { #>
                                    data-user-setting="imgsize"
                                    <# } #>>
                                        <# var size=d ata.sizes[ 'thumbnail']; if ( size ) { #>
                                            <option value="thumbnail">
                                                Thumbnail &ndash; {{ size.width }} &times; {{ size.height }}
                                            </option>
                                            <# } #>
                                                <# var size=d ata.sizes[ 'medium']; if ( size ) { #>
                                                    <option value="medium">
                                                        Medium &ndash; {{ size.width }} &times; {{ size.height }}
                                                    </option>
                                                    <# } #>
                                                        <# var size=d ata.sizes[ 'large']; if ( size ) { #>
                                                            <option value="large">
                                                                Large &ndash; {{ size.width }} &times; {{ size.height }}
                                                            </option>
                                                            <# } #>
                                                                <# var size=d ata.sizes[ 'full']; if ( size ) { #>
                                                                    <option value="full">
                                                                        Full Size &ndash; {{ size.width }} &times; {{ size.height }}
                                                                    </option>
                                                                    <# } #>
                                                                        <option value="custom">
                                                                            Custom Size </option>
                                </select>
                            </label>
                            <# } #>
                                <div class="custom-size<# if ( data.model.size !== 'custom' ) { #> hidden<# } #>">
                                    <label><span>Width <small>(px)</small></span>
                                        <input data-setting="customWidth" type="number" step="1" value="{{ data.model.customWidth }}" />
                                    </label><span class="sep">&times;</span>
                                    <label><span>Height <small>(px)</small></span>
                                        <input data-setting="customHeight" type="number" step="1" value="{{ data.model.customHeight }}" />
                                    </label>
                                </div>
                                <# } #>
                                    <div class="setting link-to">
                                        <span>Link To</span>
                                        <select data-setting="link">
                                            <# if ( data.attachment ) { #>
                                                <option value="file">
                                                    Media File </option>
                                                <option value="post">
                                                    Attachment Page </option>
                                                <# } else { #>
                                                    <option value="file">
                                                        Image URL </option>
                                                    <# } #>
                                                        <option value="custom">
                                                            Custom URL </option>
                                                        <option value="none">
                                                            None </option>
                                        </select>
                                        <input type="text" class="link-to-custom" data-setting="linkUrl" />
                                    </div>
                                    <div class="advanced-section">
                                        <h2><button type="button" class="button-link advanced-toggle">Advanced Options</button></h2>
                                        <div class="advanced-settings hidden">
                                            <div class="advanced-image">
                                                <label class="setting title-text">
                                                    <span>Image Title Attribute</span>
                                                    <input type="text" data-setting="title" value="{{ data.model.title }}" />
                                                </label>
                                                <label class="setting extra-classes">
                                                    <span>Image CSS Class</span>
                                                    <input type="text" data-setting="extraClasses" value="{{ data.model.extraClasses }}" />
                                                </label>
                                            </div>
                                            <div class="advanced-link">
                                                <div class="setting link-target">
                                                    <label>
                                                        <input type="checkbox" data-setting="linkTargetBlank" value="_blank" <# if ( data.model.linkTargetBlank ) { #>checked="checked"
                                                        <# } #>>Open link in a new tab</label>
                                                </div>
                                                <label class="setting link-rel">
                                                    <span>Link Rel</span>
                                                    <input type="text" data-setting="linkRel" value="{{ data.model.linkClassName }}" />
                                                </label>
                                                <label class="setting link-class-name">
                                                    <span>Link CSS Class</span>
                                                    <input type="text" data-setting="linkClassName" value="{{ data.model.linkClassName }}" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                </div>
            </div>
        </div>
    </script>
    <script type="text/html" id="tmpl-image-editor">
        <div id="media-head-{{ data.id }}"></div>
        <div id="image-editor-{{ data.id }}"></div>
    </script>
    <script type="text/html" id="tmpl-audio-details">
        <# var ext, html5types={ mp3: wp.media.view.settings.embedMimes.mp3, ogg: wp.media.view.settings.embedMimes.ogg }; #>
            <div class="media-embed media-embed-details">
                <div class="embed-media-settings embed-audio-settings">
                    <audio style="visibility: hidden" controls class="wp-audio-shortcode" width="{{ _.isUndefined( data.model.width ) ? 400 : data.model.width }}" preload="{{ _.isUndefined( data.model.preload ) ? 'none' : data.model.preload }}" <# if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) { #> autoplay
                        <# } if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) { #> loop
                            <# } #>
                                >
                                <# if ( ! _.isEmpty( data.model.src ) ) { #>
                                    <source src="{{ data.model.src }}" type="{{ wp.media.view.settings.embedMimes[ data.model.src.split('.').pop() ] }}" />
                                    <# } #>
                                        <# if ( ! _.isEmpty( data.model.mp3 ) ) { #>
                                            <source src="{{ data.model.mp3 }}" type="{{ wp.media.view.settings.embedMimes[ 'mp3' ] }}" />
                                            <# } #>
                                                <# if ( ! _.isEmpty( data.model.ogg ) ) { #>
                                                    <source src="{{ data.model.ogg }}" type="{{ wp.media.view.settings.embedMimes[ 'ogg' ] }}" />
                                                    <# } #>
                                                        <# if ( ! _.isEmpty( data.model.wma ) ) { #>
                                                            <source src="{{ data.model.wma }}" type="{{ wp.media.view.settings.embedMimes[ 'wma' ] }}" />
                                                            <# } #>
                                                                <# if ( ! _.isEmpty( data.model.m4a ) ) { #>
                                                                    <source src="{{ data.model.m4a }}" type="{{ wp.media.view.settings.embedMimes[ 'm4a' ] }}" />
                                                                    <# } #>
                                                                        <# if ( ! _.isEmpty( data.model.wav ) ) { #>
                                                                            <source src="{{ data.model.wav }}" type="{{ wp.media.view.settings.embedMimes[ 'wav' ] }}" />
                                                                            <# } #>
                    </audio>
                    <# if ( ! _.isEmpty( data.model.src ) ) { ext=d ata.model.src.split( '.').pop(); if ( html5types[ ext ] ) { delete html5types[ ext ]; } #>
                        <label class="setting">
                            <span>SRC</span>
                            <input type="text" disabled="disabled" data-setting="src" value="{{ data.model.src }}" />
                            <button type="button" class="button-link remove-setting">Remove audio source</button>
                        </label>
                        <# } #>
                            <# if ( ! _.isEmpty( data.model.mp3 ) ) { if ( ! _.isUndefined( html5types.mp3 ) ) { delete html5types.mp3; } #>
                                <label class="setting">
                                    <span>MP3</span>
                                    <input type="text" disabled="disabled" data-setting="mp3" value="{{ data.model.mp3 }}" />
                                    <button type="button" class="button-link remove-setting">Remove audio source</button>
                                </label>
                                <# } #>
                                    <# if ( ! _.isEmpty( data.model.ogg ) ) { if ( ! _.isUndefined( html5types.ogg ) ) { delete html5types.ogg; } #>
                                        <label class="setting">
                                            <span>OGG</span>
                                            <input type="text" disabled="disabled" data-setting="ogg" value="{{ data.model.ogg }}" />
                                            <button type="button" class="button-link remove-setting">Remove audio source</button>
                                        </label>
                                        <# } #>
                                            <# if ( ! _.isEmpty( data.model.wma ) ) { if ( ! _.isUndefined( html5types.wma ) ) { delete html5types.wma; } #>
                                                <label class="setting">
                                                    <span>WMA</span>
                                                    <input type="text" disabled="disabled" data-setting="wma" value="{{ data.model.wma }}" />
                                                    <button type="button" class="button-link remove-setting">Remove audio source</button>
                                                </label>
                                                <# } #>
                                                    <# if ( ! _.isEmpty( data.model.m4a ) ) { if ( ! _.isUndefined( html5types.m4a ) ) { delete html5types.m4a; } #>
                                                        <label class="setting">
                                                            <span>M4A</span>
                                                            <input type="text" disabled="disabled" data-setting="m4a" value="{{ data.model.m4a }}" />
                                                            <button type="button" class="button-link remove-setting">Remove audio source</button>
                                                        </label>
                                                        <# } #>
                                                            <# if ( ! _.isEmpty( data.model.wav ) ) { if ( ! _.isUndefined( html5types.wav ) ) { delete html5types.wav; } #>
                                                                <label class="setting">
                                                                    <span>WAV</span>
                                                                    <input type="text" disabled="disabled" data-setting="wav" value="{{ data.model.wav }}" />
                                                                    <button type="button" class="button-link remove-setting">Remove audio source</button>
                                                                </label>
                                                                <# } #>
                                                                    <# if ( ! _.isEmpty( html5types ) ) { #>
                                                                        <div class="setting">
                                                                            <span>Add alternate sources for maximum HTML5 playback:</span>
                                                                            <div class="button-large">
                                                                                <# _.each( html5types, function (mime, type) { #>
                                                                                    <button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button>
                                                                                    <# } ) #>
                                                                            </div>
                                                                        </div>
                                                                        <# } #>
                                                                            <div class="setting preload">
                                                                                <span>Preload</span>
                                                                                <div class="button-group button-large" data-setting="preload">
                                                                                    <button class="button" value="auto">Auto</button>
                                                                                    <button class="button" value="metadata">Metadata</button>
                                                                                    <button class="button active" value="none">None</button>
                                                                                </div>
                                                                            </div>
                                                                            <label class="setting checkbox-setting">
                                                                                <input type="checkbox" data-setting="autoplay" />
                                                                                <span>Autoplay</span>
                                                                            </label>
                                                                            <label class="setting checkbox-setting">
                                                                                <input type="checkbox" data-setting="loop" />
                                                                                <span>Loop</span>
                                                                            </label>
                </div>
            </div>
    </script>
    <script type="text/html" id="tmpl-video-details">
        <# var ext, html5types={ mp4: wp.media.view.settings.embedMimes.mp4, ogv: wp.media.view.settings.embedMimes.ogv, webm: wp.media.view.settings.embedMimes.webm }; #>
            <div class="media-embed media-embed-details">
                <div class="embed-media-settings embed-video-settings">
                    <div class="wp-video-holder">
                        <# var w=! data.model.width || data.model.width> 640 ? 640 : data.model.width, h = ! data.model.height ? 360 : data.model.height; if ( data.model.width && w !== data.model.width ) { h = Math.ceil( ( h * w ) / data.model.width ); } #>
                            <# var w_rule='' , classes=[ ], w, h, settings=w p.media.view.settings, isYouTube=i sVimeo=f alse; if ( ! _.isEmpty( data.model.src ) ) { isYouTube=d ata.model.src.match(/youtube|youtu\.be/); isVimeo=- 1 !==d ata.model.src.indexOf( 'vimeo'); } if ( settings.contentWidth && data.model.width>= settings.contentWidth ) { w = settings.contentWidth; } else { w = data.model.width; } if ( w !== data.model.width ) { h = Math.ceil( ( data.model.height * w ) / data.model.width ); } else { h = data.model.height; } if ( w ) { w_rule = 'width: ' + w + 'px; '; } if ( isYouTube ) { classes.push( 'youtube-video' ); } if ( isVimeo ) { classes.push( 'vimeo-video' ); } #>
                                <div style="{{ w_rule }}" class="wp-video">
                                    <video controls class="wp-video-shortcode {{ classes.join( ' ' ) }}" <# if ( w ) { #>width="{{ w }}"
                                        <# } #>
                                            <# if ( h ) { #>height="{{ h }}"
                                                <# } #>
                                                    <# if ( ! _.isUndefined( data.model.poster ) && data.model.poster ) { #> poster="{{ data.model.poster }}"
                                                        <# } #>
                                                            preload="{{ _.isUndefined( data.model.preload ) ? 'metadata' : data.model.preload }}"
                                                            <# if ( ! _.isUndefined( data.model.autoplay ) && data.model.autoplay ) { #> autoplay
                                                                <# } if ( ! _.isUndefined( data.model.loop ) && data.model.loop ) { #> loop
                                                                    <# } #>
                                                                        >
                                                                        <# if ( ! _.isEmpty( data.model.src ) ) { if ( isYouTube ) { #>
                                                                            <source src="{{ data.model.src }}" type="video/youtube" />
                                                                            <# } else if ( isVimeo ) { #>
                                                                                <source src="{{ data.model.src }}" type="video/vimeo" />
                                                                                <# } else { #>
                                                                                    <source src="{{ data.model.src }}" type="{{ settings.embedMimes[ data.model.src.split('.').pop() ] }}" />
                                                                                    <# } } #>
                                                                                        <# if ( data.model.mp4 ) { #>
                                                                                            <source src="{{ data.model.mp4 }}" type="{{ settings.embedMimes[ 'mp4' ] }}" />
                                                                                            <# } #>
                                                                                                <# if ( data.model.m4v ) { #>
                                                                                                    <source src="{{ data.model.m4v }}" type="{{ settings.embedMimes[ 'm4v' ] }}" />
                                                                                                    <# } #>
                                                                                                        <# if ( data.model.webm ) { #>
                                                                                                            <source src="{{ data.model.webm }}" type="{{ settings.embedMimes[ 'webm' ] }}" />
                                                                                                            <# } #>
                                                                                                                <# if ( data.model.ogv ) { #>
                                                                                                                    <source src="{{ data.model.ogv }}" type="{{ settings.embedMimes[ 'ogv' ] }}" />
                                                                                                                    <# } #>
                                                                                                                        <# if ( data.model.wmv ) { #>
                                                                                                                            <source src="{{ data.model.wmv }}" type="{{ settings.embedMimes[ 'wmv' ] }}" />
                                                                                                                            <# } #>
                                                                                                                                <# if ( data.model.flv ) { #>
                                                                                                                                    <source src="{{ data.model.flv }}" type="{{ settings.embedMimes[ 'flv' ] }}" />
                                                                                                                                    <# } #>
                                                                                                                                        {{{ data.model.content }}}
                                    </video>
                                </div>
                                <# if ( ! _.isEmpty( data.model.src ) ) { ext=d ata.model.src.split( '.').pop(); if ( html5types[ ext ] ) { delete html5types[ ext ]; } #>
                                    <label class="setting">
                                        <span>SRC</span>
                                        <input type="text" disabled="disabled" data-setting="src" value="{{ data.model.src }}" />
                                        <button type="button" class="button-link remove-setting">Remove video source</button>
                                    </label>
                                    <# } #>
                                        <# if ( ! _.isEmpty( data.model.mp4 ) ) { if ( ! _.isUndefined( html5types.mp4 ) ) { delete html5types.mp4; } #>
                                            <label class="setting">
                                                <span>MP4</span>
                                                <input type="text" disabled="disabled" data-setting="mp4" value="{{ data.model.mp4 }}" />
                                                <button type="button" class="button-link remove-setting">Remove video source</button>
                                            </label>
                                            <# } #>
                                                <# if ( ! _.isEmpty( data.model.m4v ) ) { if ( ! _.isUndefined( html5types.m4v ) ) { delete html5types.m4v; } #>
                                                    <label class="setting">
                                                        <span>M4V</span>
                                                        <input type="text" disabled="disabled" data-setting="m4v" value="{{ data.model.m4v }}" />
                                                        <button type="button" class="button-link remove-setting">Remove video source</button>
                                                    </label>
                                                    <# } #>
                                                        <# if ( ! _.isEmpty( data.model.webm ) ) { if ( ! _.isUndefined( html5types.webm ) ) { delete html5types.webm; } #>
                                                            <label class="setting">
                                                                <span>WEBM</span>
                                                                <input type="text" disabled="disabled" data-setting="webm" value="{{ data.model.webm }}" />
                                                                <button type="button" class="button-link remove-setting">Remove video source</button>
                                                            </label>
                                                            <# } #>
                                                                <# if ( ! _.isEmpty( data.model.ogv ) ) { if ( ! _.isUndefined( html5types.ogv ) ) { delete html5types.ogv; } #>
                                                                    <label class="setting">
                                                                        <span>OGV</span>
                                                                        <input type="text" disabled="disabled" data-setting="ogv" value="{{ data.model.ogv }}" />
                                                                        <button type="button" class="button-link remove-setting">Remove video source</button>
                                                                    </label>
                                                                    <# } #>
                                                                        <# if ( ! _.isEmpty( data.model.wmv ) ) { if ( ! _.isUndefined( html5types.wmv ) ) { delete html5types.wmv; } #>
                                                                            <label class="setting">
                                                                                <span>WMV</span>
                                                                                <input type="text" disabled="disabled" data-setting="wmv" value="{{ data.model.wmv }}" />
                                                                                <button type="button" class="button-link remove-setting">Remove video source</button>
                                                                            </label>
                                                                            <# } #>
                                                                                <# if ( ! _.isEmpty( data.model.flv ) ) { if ( ! _.isUndefined( html5types.flv ) ) { delete html5types.flv; } #>
                                                                                    <label class="setting">
                                                                                        <span>FLV</span>
                                                                                        <input type="text" disabled="disabled" data-setting="flv" value="{{ data.model.flv }}" />
                                                                                        <button type="button" class="button-link remove-setting">Remove video source</button>
                                                                                    </label>
                                                                                    <# } #>
                    </div>
                    <# if ( ! _.isEmpty( html5types ) ) { #>
                        <div class="setting">
                            <span>Add alternate sources for maximum HTML5 playback:</span>
                            <div class="button-large">
                                <# _.each( html5types, function (mime, type) { #>
                                    <button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button>
                                    <# } ) #>
                            </div>
                        </div>
                        <# } #>
                            <# if ( ! _.isEmpty( data.model.poster ) ) { #>
                                <label class="setting">
                                    <span>Poster Image</span>
                                    <input type="text" disabled="disabled" data-setting="poster" value="{{ data.model.poster }}" />
                                    <button type="button" class="button-link remove-setting">Remove poster image</button>
                                </label>
                                <# } #>
                                    <div class="setting preload">
                                        <span>Preload</span>
                                        <div class="button-group button-large" data-setting="preload">
                                            <button class="button" value="auto">Auto</button>
                                            <button class="button" value="metadata">Metadata</button>
                                            <button class="button active" value="none">None</button>
                                        </div>
                                    </div>
                                    <label class="setting checkbox-setting">
                                        <input type="checkbox" data-setting="autoplay" />
                                        <span>Autoplay</span>
                                    </label>
                                    <label class="setting checkbox-setting">
                                        <input type="checkbox" data-setting="loop" />
                                        <span>Loop</span>
                                    </label>
                                    <label class="setting" data-setting="content">
    <span>Tracks (subtitles, captions, descriptions, chapters, or metadata)</span>
        <# var content='' ; if ( ! _.isEmpty( data.model.content ) ) { var tracks=j Query( data.model.content ).filter( 'track' ); _.each( tracks.toArray(), function (track) { content +=t rack.outerHTML; #>
                                            <p>
    <input class="content-track" type="text" value="{{ track.outerHTML }}" />
    <button type="button" class="button-link remove-setting remove-track">Remove video track</button>
    </p>
             <# } ); #>
                   <# } else { #>
    <em>There are no associated subtitles.</em>
                                                    <# } #>
       <textarea class="hidden content-setting">{{ content }}</textarea>
                                    </label>
                </div>
            </div>
    </script>
    <script type="text/html" id="tmpl-editor-gallery">
        <# if ( data.attachments.length ) { #>
            <div class="gallery gallery-columns-{{ data.columns }}">
                <# _.each( data.attachments, function( attachment, index ) { #>
                    <dl class="gallery-item">
                        <dt class="gallery-icon">
                            <# if ( attachment.thumbnail ) { #>
                                <img src="{{ attachment.thumbnail.url }}" width="{{ attachment.thumbnail.width }}" height="{{ attachment.thumbnail.height }}" alt="" />
                                <# } else { #>
                                    <img src="{{ attachment.url }}" alt="" />
                                    <# } #>
                        </dt>
                        <# if ( attachment.caption ) { #>
                            <dd class="wp-caption-text gallery-caption">
                                {{{ data.verifyHTML( attachment.caption ) }}}
                            </dd>
                            <# } #>
                    </dl>
                    <# if ( index % data.columns===d ata.columns - 1 ) { #>
                        <br style="clear: both;">
                        <# } #>
                            <# } ); #>
            </div>
            <# } else { #>
                <div class="wpview-error">
                    <div class="dashicons dashicons-format-gallery"></div>
                    <p>No items found.</p>
                </div>
                <# } #>
    </script>
    <script type="text/html" id="tmpl-crop-content">
        <img class="crop-image" src="{{ data.url }}" alt="Image crop area preview. Requires mouse interaction.">
        <div class="upload-errors"></div>
    </script>
    <script type="text/html" id="tmpl-site-icon-preview">
        <h2>Preview</h2>
        <strong aria-hidden="true">As a browser icon</strong>
        <div class="favicon-preview">
            <img src="http://demo.themeum.com/wordpress/educon/wp-admin/images/browser.png" class="browser-preview" width="182" height="" alt="" />
            <div class="favicon">
                <img id="preview-favicon" src="{{ data.url }}" alt="Preview as a browser icon" />
            </div>
            <span class="browser-title" aria-hidden="true">Educon &#8211; School, College, University, Academy, Course, Education &amp; Event WordPress Theme &#8211; ThemeForest</span>
        </div>
        <strong aria-hidden="true">As an app icon</strong>
        <div class="app-icon-preview">
            <img id="preview-app-icon" src="{{ data.url }}" alt="Preview as an app icon" />
        </div>
    </script>
    <script id="tmpl-rwmb-media-item" type="text/html">
        <input type="hidden" name="{{{ data.fieldName }}}" value="{{{ data.id }}}" class="rwmb-media-input">
        <div class="rwmb-media-preview">
            <div class="rwmb-media-content">
                <div class="centered">
                    <# if ( 'image'===d ata.type && data.sizes ) { #>
                        <# if ( data.sizes.thumbnail ) { #>
                            <img src="{{{ data.sizes.thumbnail.url }}}">
                            <# } else { #>
                                <img src="{{{ data.sizes.full.url }}}">
                                <# } #>
                                    <# } else { #>
                                        <# if ( data.image && data.image.src && data.image.src !==d ata.icon ) { #>
                                            <img src="{{ data.image.src }}" />
                                            <# } else { #>
                                                <img src="{{ data.icon }}" />
                                                <# } #>
                                                    <# } #>
                </div>
            </div>
        </div>
        <div class="rwmb-media-info">
            <h4>
      <a href="{{{ data.url }}}" target="_blank" title="{{{ i18nRwmbMedia.view }}}">
        <# if( data.title ) { #> {{{ data.title }}}
          <# } else { #> {{{ i18nRwmbMedia.noTitle }}}
        <# } #>
      </a>
    </h4>
            <p>{{{ data.mime }}}</p>
            <p>
                <a class="rwmb-edit-media" title="{{{ i18nRwmbMedia.edit }}}" href="{{{ data.editLink }}}" target="_blank">
                    <span class="dashicons dashicons-edit"></span>{{{ i18nRwmbMedia.edit }}}
                </a>
                <a href="#" class="rwmb-remove-media" title="{{{ i18nRwmbMedia.remove }}}">
                    <span class="dashicons dashicons-no-alt"></span>{{{ i18nRwmbMedia.remove }}}
                </a>
            </p>
        </div>
    </script>
    <script id="tmpl-rwmb-media-status" type="text/html">
        <# if ( data.maxFiles> 0 ) { #> {{{ data.length }}}/{{{ data.maxFiles }}}
            <# if ( 1 < data.maxFiles ) { #> {{{ i18nRwmbMedia.multiple }}}
                <# } else {#> {{{ i18nRwmbMedia.single }}}
                    <# } #>
                        <# } #>
    </script>
    <script id="tmpl-rwmb-media-button" type="text/html">
        <a class="button">{{{ data.text }}}</a>
    </script>
    <script id="tmpl-rwmb-image-item" type="text/html">
        <input type="hidden" name="{{{ data.fieldName }}}" value="{{{ data.id }}}" class="rwmb-media-input">
        <div class="rwmb-media-preview">
            <div class="rwmb-media-content">
                <div class="centered">
                    <# if ( 'image'===d ata.type && data.sizes ) { #>
                        <# if ( data.sizes.thumbnail ) { #>
                            <img src="{{{ data.sizes.thumbnail.url }}}">
                            <# } else { #>
                                <img src="{{{ data.sizes.full.url }}}">
                                <# } #>
                                    <# } else { #>
                                        <# if ( data.image && data.image.src && data.image.src !==d ata.icon ) { #>
                                            <img src="{{ data.image.src }}" />
                                            <# } else { #>
                                                <img src="{{ data.icon }}" />
                                                <# } #>
                                                    <# } #>
                </div>
            </div>
        </div>
        <div class="rwmb-overlay"></div>
        <div class="rwmb-media-bar">
            <a class="rwmb-edit-media" title="{{{ i18nRwmbMedia.edit }}}" href="{{{ data.editLink }}}" target="_blank">
                <span class="dashicons dashicons-edit"></span>
            </a>
            <a href="#" class="rwmb-remove-media" title="{{{ i18nRwmbMedia.remove }}}">
                <span class="dashicons dashicons-no-alt"></span>
            </a>
        </div>
    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {
        "recaptcha": {
            "messages": {
                "empty": "Please verify that you are not a robot."
            }
        }
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/plugins/contact-form-7/includes/js/scripts4906.js?ver=4.7'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/underscore.min4511.js?ver=1.8.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/shortcode.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/backbone.min9632.js?ver=1.2.3'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wordpress\/educon\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/wp-util.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/wp-backbone.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var _wpMediaModelsL10n = {
        "settings": {
            "ajaxurl": "\/wordpress\/educon\/wp-admin\/admin-ajax.php",
            "post": {
                "id": 0
            }
        }
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/media-models.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var pluploadL10n = {
        "queue_limit_exceeded": "You have attempted to queue too many files.",
        "file_exceeds_size_limit": "%s exceeds the maximum upload size for this site.",
        "zero_byte_file": "This file is empty. Please try another.",
        "invalid_filetype": "This file type is not allowed. Please try another.",
        "not_an_image": "This file is not an image. Please try another.",
        "image_memory_exceeded": "Memory exceeded. Please try another smaller file.",
        "image_dimensions_exceeded": "This is larger than the maximum size. Please try another.",
        "default_error": "An error occurred in the upload. Please try again later.",
        "missing_upload_url": "There was a configuration error. Please contact the server administrator.",
        "upload_limit_exceeded": "You may only upload 1 file.",
        "http_error": "HTTP error.",
        "upload_failed": "Upload failed.",
        "big_upload_failed": "Please try uploading this file with the %1$sbrowser uploader%2$s.",
        "big_upload_queued": "%s exceeds the maximum upload size for the multi-file uploader when used in your browser.",
        "io_error": "IO error.",
        "security_error": "Security error.",
        "file_cancelled": "File canceled.",
        "upload_stopped": "Upload stopped.",
        "dismiss": "Dismiss",
        "crunching": "Crunching\u2026",
        "deleted": "moved to the trash.",
        "error_uploading": "\u201c%s\u201d has failed to upload."
    };
    var _wpPluploadSettings = {
        "defaults": {
            "runtimes": "html5,flash,silverlight,html4",
            "file_data_name": "async-upload",
            "url": "\/wordpress\/educon\/wp-admin\/async-upload.php",
            "flash_swf_url": "http:\/\/demo.themeum.com\/wordpress\/educon\/wp-includes\/js\/plupload\/plupload.flash.swf",
            "silverlight_xap_url": "http:\/\/demo.themeum.com\/wordpress\/educon\/wp-includes\/js\/plupload\/plupload.silverlight.xap",
            "filters": {
                "max_file_size": "1536000b",
                "mime_types": [{
                    "extensions": "jpg,jpeg,jpe,png,gif,mov,qt,avi,mpeg,mpg,mpe,3gp,3gpp,3g2,3gp2,mid,midi,pdf,doc,docx,docm,pot,pps,ppt,pptx,pptm,odt,ppsx,ppsm,xla,xls,xlt,xlw,xlsx,xlsm,xlsb,key,mp3,m4a,m4b,ogg,oga,wma,wav,mp4,m4v,webm,ogv,wmv,flv"
                }]
            },
            "multipart_params": {
                "action": "upload-attachment",
                "_wpnonce": "d7755e12ec"
            }
        },
        "browser": {
            "mobile": false,
            "supported": true
        },
        "limitExceeded": false
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/plupload/wp-plupload.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/jquery/ui/sortable.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var mejsL10n = {
        "language": "en-US",
        "strings": {
            "Close": "Close",
            "Fullscreen": "Fullscreen",
            "Turn off Fullscreen": "Turn off Fullscreen",
            "Go Fullscreen": "Go Fullscreen",
            "Download File": "Download File",
            "Download Video": "Download Video",
            "Play": "Play",
            "Pause": "Pause",
            "Captions\/Subtitles": "Captions\/Subtitles",
            "None": "None",
            "Time Slider": "Time Slider",
            "Skip back %1 seconds": "Skip back %1 seconds",
            "Video Player": "Video Player",
            "Audio Player": "Audio Player",
            "Volume Slider": "Volume Slider",
            "Mute Toggle": "Mute Toggle",
            "Unmute": "Unmute",
            "Mute": "Mute",
            "Use Up\/Down Arrow keys to increase or decrease volume.": "Use Up\/Down Arrow keys to increase or decrease volume.",
            "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds."
        }
    };
    var _wpmejsSettings = {
        "pluginPath": "\/wordpress\/educon\/wp-includes\/js\/mediaelement\/"
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/mediaelement/mediaelement-and-player.min51cd.js?ver=2.22.0'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/mediaelement/wp-mediaelement.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var _wpMediaViewsL10n = {
        "url": "URL",
        "addMedia": "Add Media",
        "search": "Search",
        "select": "Select",
        "cancel": "Cancel",
        "update": "Update",
        "replace": "Replace",
        "remove": "Remove",
        "back": "Back",
        "selected": "%d selected",
        "dragInfo": "Drag and drop to reorder media files.",
        "uploadFilesTitle": "Upload Files",
        "uploadImagesTitle": "Upload Images",
        "mediaLibraryTitle": "Media Library",
        "insertMediaTitle": "Insert Media",
        "createNewGallery": "Create a new gallery",
        "createNewPlaylist": "Create a new playlist",
        "createNewVideoPlaylist": "Create a new video playlist",
        "returnToLibrary": "\u2190 Return to library",
        "allMediaItems": "All media items",
        "allDates": "All dates",
        "noItemsFound": "No items found.",
        "insertIntoPost": "Insert into post",
        "unattached": "Unattached",
        "trash": "Trash",
        "uploadedToThisPost": "Uploaded to this post",
        "warnDelete": "You are about to permanently delete this item.\n  'Cancel' to stop, 'OK' to delete.",
        "warnBulkDelete": "You are about to permanently delete these items.\n  'Cancel' to stop, 'OK' to delete.",
        "warnBulkTrash": "You are about to trash these items.\n  'Cancel' to stop, 'OK' to delete.",
        "bulkSelect": "Bulk Select",
        "cancelSelection": "Cancel Selection",
        "trashSelected": "Trash Selected",
        "untrashSelected": "Untrash Selected",
        "deleteSelected": "Delete Selected",
        "deletePermanently": "Delete Permanently",
        "apply": "Apply",
        "filterByDate": "Filter by date",
        "filterByType": "Filter by type",
        "searchMediaLabel": "Search Media",
        "searchMediaPlaceholder": "Search media items...",
        "noMedia": "No media files found.",
        "attachmentDetails": "Attachment Details",
        "insertFromUrlTitle": "Insert from URL",
        "setFeaturedImageTitle": "Featured Image",
        "setFeaturedImage": "Set featured image",
        "createGalleryTitle": "Create Gallery",
        "editGalleryTitle": "Edit Gallery",
        "cancelGalleryTitle": "\u2190 Cancel Gallery",
        "insertGallery": "Insert gallery",
        "updateGallery": "Update gallery",
        "addToGallery": "Add to gallery",
        "addToGalleryTitle": "Add to Gallery",
        "reverseOrder": "Reverse order",
        "imageDetailsTitle": "Image Details",
        "imageReplaceTitle": "Replace Image",
        "imageDetailsCancel": "Cancel Edit",
        "editImage": "Edit Image",
        "chooseImage": "Choose Image",
        "selectAndCrop": "Select and Crop",
        "skipCropping": "Skip Cropping",
        "cropImage": "Crop Image",
        "cropYourImage": "Crop your image",
        "cropping": "Cropping\u2026",
        "suggestedDimensions": "Suggested image dimensions:",
        "cropError": "There has been an error cropping your image.",
        "audioDetailsTitle": "Audio Details",
        "audioReplaceTitle": "Replace Audio",
        "audioAddSourceTitle": "Add Audio Source",
        "audioDetailsCancel": "Cancel Edit",
        "videoDetailsTitle": "Video Details",
        "videoReplaceTitle": "Replace Video",
        "videoAddSourceTitle": "Add Video Source",
        "videoDetailsCancel": "Cancel Edit",
        "videoSelectPosterImageTitle": "Select Poster Image",
        "videoAddTrackTitle": "Add Subtitles",
        "playlistDragInfo": "Drag and drop to reorder tracks.",
        "createPlaylistTitle": "Create Audio Playlist",
        "editPlaylistTitle": "Edit Audio Playlist",
        "cancelPlaylistTitle": "\u2190 Cancel Audio Playlist",
        "insertPlaylist": "Insert audio playlist",
        "updatePlaylist": "Update audio playlist",
        "addToPlaylist": "Add to audio playlist",
        "addToPlaylistTitle": "Add to Audio Playlist",
        "videoPlaylistDragInfo": "Drag and drop to reorder videos.",
        "createVideoPlaylistTitle": "Create Video Playlist",
        "editVideoPlaylistTitle": "Edit Video Playlist",
        "cancelVideoPlaylistTitle": "\u2190 Cancel Video Playlist",
        "insertVideoPlaylist": "Insert video playlist",
        "updateVideoPlaylist": "Update video playlist",
        "addToVideoPlaylist": "Add to video playlist",
        "addToVideoPlaylistTitle": "Add to Video Playlist",
        "settings": {
            "tabs": [],
            "tabUrl": "http:\/\/demo.themeum.com\/wordpress\/educon\/wp-admin\/media-upload.php?chromeless=1",
            "mimeTypes": {
                "image": "Images",
                "audio": "Audio",
                "video": "Video"
            },
            "captions": true,
            "nonce": {
                "sendToEditor": "61098dfe8a"
            },
            "post": {
                "id": 0
            },
            "defaultProps": {
                "link": "none",
                "align": "",
                "size": ""
            },
            "attachmentCounts": {
                "audio": 0,
                "video": 0
            },
            "embedExts": ["mp3", "ogg", "wma", "m4a", "wav", "mp4", "m4v", "webm", "ogv", "wmv", "flv"],
            "embedMimes": {
                "mp3": "audio\/mpeg",
                "ogg": "audio\/ogg",
                "wma": "audio\/x-ms-wma",
                "m4a": "audio\/mpeg",
                "wav": "audio\/wav",
                "mp4": "video\/mp4",
                "m4v": "video\/mp4",
                "webm": "video\/webm",
                "ogv": "video\/ogg",
                "wmv": "video\/x-ms-wmv",
                "flv": "video\/x-flv"
            },
            "contentWidth": null,
            "months": [{
                "year": "2017",
                "month": "3",
                "text": "March 2017"
            }, {
                "year": "2017",
                "month": "2",
                "text": "February 2017"
            }],
            "mediaTrash": 0
        }
    };
    /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/media-views.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/media-editor.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/media-audiovideo.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/themes/wpeducon/js/bootstrap.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/themes/wpeducon/js/jquery.magnific-popup.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/themes/wpeducon/js/loopcounterfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/themes/wpeducon/js/jquery.prettySocial.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/themes/wpeducon/js/ajax-booking-btnfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/comment-reply.minfe9d.js?ver=4.7.3'></script>
    <script src="<?php echo base_url();?>assets/themes/wpeducon/js/main.js"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
    var thm_edc = {
        "thm_mmc_right": "24"
    };
    /* ]]> */
    </script>

    <script type='text/javascript' src='<?php echo base_url();?>assets//themes/wpeducon/js/mainfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets1/js/wp-embed.minfe9d.js?ver=4.7.3'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/plugins/js_composer/assets/js/dist/js_composer_front.minc721.js?ver=5.1'></script>
    <script type='text/javascript'>
    /* <![CDATA[ */
    var mc4wp_forms_config = [];
    /* ]]> */
    </script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/plugins/mailchimp-for-wp/assets/js/forms-api.minbfce.js?ver=4.1.0'></script>
    <!--[if lte IE 9]>
<script type='text/javascript' src='http://demo.themeum.com/wordpress/educon/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.1.0'></script>
<![endif]-->



<script src="<?php echo base_url();?>assets/jquery.min.js">
</script>
<script>
    $(document).ready(function(){
        //$('option').prop('disabled', true);
        $(".program-select").on('change',function(){
            var program_id = $(this).val();
            program_id = program_id.split("pro-").join("");
var url ='<?php echo base_url(); ?>'+"index.php/Arts/program_with_details";
        $(".loading").show();
           $.ajax({
            method:"POST",
            url:url,
            data:{'id':program_id},
            dataType:'json',
            async:'true',
            success:function(data){
                $.each(data,function(key,val){
                    var brochure = '<?php echo base_url();?>'+'uploads/'+val.course_brochure;
                      var duration,cost,language,download;                  
if(val.program_duration==''){
    duration = 'Not mention';
}else{
    duration = val.program_duration;
}
if(val.program_total_cost==''){
    cost = 'Not mention';
}else{
    cost = val.program_total_cost;
}
if(val.teaching_language==''){
    language = 'Not mention';
}else{
    language = val.teaching_language;
}
if(val.brochure==''){
    download='';
}else{
    var download_brochure = '<?php echo base_url()?>'+'uploads/'+val.course_brochure;
    download = '<h3> Download Course Detail PDF</h3><a href="'+download_brochure+'" class="btn  btn-success notice-btn" target="_blank"><span><i class="fa fa-cloud-download"></i> Download Course Brochure</span></a>';
}
$(".single-program-info").find('.info-detail').empty().append('<div class="entry-summary clearfix"><h4 id="program"><i class="fa fa-graduation-cap" aria-hidden="true"></i>'+val.full_program_name+'</h4><ul class="blog-post-meta single-event-meta single-course-meta"><li><i class="fa fa-clock-o" aria-hidden="true" title="Duration"></i>'+duration+'</li><li><i class="fa fa-graduation-cap" aria-hidden="true" title="Undergraduate"></i>'+val.level+'</li><li><i class="fa fa-money" aria-hidden="true" title="Total Cost"></i>Rs. '+cost+'</li><li><i class="fa fa-language" aria-hidden="true" title="Language"></i>'+language+'</li></ul><h4>Overview</h4><p>'+val.overview+'</p><h4>'+val.program+' '+'at Kathmandu University</h4><p>'+val.program_at_KU+'</p><h4>FEES AND FUNDING</h4><p>'+val.fees_and_funding+'</p><h4>THE GOALS</h4><p>'+val.program_goals+'<h4>HOW TO APPLY</h4><p>'+val.how_to_apply+'</p>'+download+'<br><a  data-toggle="modal" data-target="#allProgram" class="btn btn-primary course-rigister" id="my_choice">Register Now <i class="fa fa-angle-right"></i></a><div class="text-center"><p class="event-share-title">Share This Course</p><ul class="event-social-share"><li><a href="#" class="prettySocial" data-type="facebook" data-url="http://soa.ku.edu.np/index.php?link=economics" data-title="Economics" data-description="Economics" data-media="<?php echo base_url();?>assets/uploads/2017/03/Courses5.jpg"><i class="fa fa-facebook"></i></a></li><li><a href="#" class="prettySocial" data-type="twitter" data-url="http://soa.ku.edu.np/index.php?link=economics" data-title="Economics" data-description="Economics" data-media="<?php echo base_url();?>assets/uploads/2017/03/Courses5.jpg"><i class="fa fa-twitter"></i></a></li></ul></div></div>');
$(".loading").hide();
                });
            }
           });
        });
$("#my_choice").on('click', function(){
var prgram_name = $('#program').text();
$("input[name=choosedProgram]").val(prgram_name);
});

$("#undrForm").submit(function(){

    var Vsent_link = '<?php echo base_url();?>'+'index.php/Arts/interested_visitors';

    if($.trim($("input[name=Vname]").val()) === "" || $.trim($("input[name=Vemail]").val()) === "" || $.trim($("input[name=Vphone]").val()) === "" || $.trim($("input[name=choosedProgram]").val()) === ""){
        $("#error").remove();
        $(".contact-submit").append('<span id="error" style="padding-left: 10px;color: #cb2121;font-weight: 500;">You did not fill out one of the required* fields !!</span>');
        return false;
    }else{
        $("#error").remove();
        $(".contact-submit").append('<label style="padding-left: 10px;color: #209119;font-size: 20px;"><i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Wait...</span></label>');

         $.ajax({
        method:"POST",
        url:Vsent_link ,
        data:$("#undrForm").serialize(),
        success:function(){
           $("#event-register-form").empty().append('<div><p><i class="fa fa-check-circle" aria-hidden="true"></i></p><h4>You have been successfully registered. We will contact you soon.</h4><h5>Thank you. <i class="fa fa-smile-o" aria-hidden="true"></i></h5></div>');
            setTimeout(function(){
                window.location.reload(1);
            }, 5000);
        }
    });
    }
});

$("#ApplyForm").submit(function(event){
     event.preventDefault();
    var Vsent_link = '<?php echo base_url();?>'+'index.php/Arts/interested_visitors';

    if($.trim($("input[name=Vname]").val()) === "" || $.trim($("input[name=Vemail]").val()) === "" || $.trim($("input[name=Vphone]").val()) === "" || $.trim($("select[name=choosedProgram]").val()) === ""){
        $("#error").remove();
        $(".contact-submit").append('<span id="error" style="padding-left: 10px;color: #cb2121;font-weight: 500;">You did not fill out one of the required* fields !!</span>');
        return false;
    }else{
        $("#error").remove();
        $(".contact-submit").append('<label style="padding-left: 10px;color: #209119;font-size: 20px;"><i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Wait...</span></label>');

         $.ajax({
        method:"POST",
        url:Vsent_link ,
        data:$("#ApplyForm").serialize(),
        success:function(){
           $(".visitors-info").empty().append('<div><p><i class="fa fa-check-circle" aria-hidden="true"></i></p><h4>You have been successfully registered. We will contact you soon.</h4><h5>Thank you. <i class="fa fa-smile-o" aria-hidden="true"></i></h5></div>');
           setTimeout(function(){
                window.location.reload(1);
            }, 5000);
            
        }
    });
    }
});


$("#cn-info").submit(function(event){
    event.preventDefault();
    var Vsent_link1 = '<?php echo base_url();?>'+'index.php/Arts/interested_visitors';

    if($.trim($("input[name=Vname]").val()) === "" || $.trim($("input[name=Vemail]").val()) === "" || $.trim($("input[name=Vphone]").val()) === ""){
        $("#error").remove();
        $(".contact-submit").append('<span id="error" style="padding-left: 10px;color: #cb2121;font-weight: 500;">You did not fill out one of the required* fields !!</span>');
        return false;
    }else{
        $("#error").remove();
        $(".contact-submit").append('<label style="padding-left: 10px;color: #209119;font-size: 20px;"><i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Wait...</span></label>');

         $.ajax({
        method:"POST",
        url:Vsent_link1,
        data:$("#cn-info").serialize(),
        success:function(){
           $("#success-message").empty().append('<div><p><i class="fa fa-check-circle" aria-hidden="true"></i></p><h4>Thank you for contacting us. We will contact you soon.</h4><h5> <i class="fa fa-smile-o" aria-hidden="true"></i></h5></div>');
           setTimeout(function(){
                window.location.reload(1);
            }, 5000);
            
        }
    });
    }
});


// request informtaion
$("#RqstInfo").submit(function(event){
    event.preventDefault();
    var Vsent_link1 = '<?php echo base_url();?>'+'index.php/Arts/interested_visitors';

    if($.trim($("input[name=Vname]").val()) === "" || $.trim($("input[name=Vemail]").val()) === "" || $.trim($("input[name=Vphone]").val()) === ""){
        $("#error").remove();
        $(".contact-submit").append('<span id="error" style="padding-left: 10px;color: #cb2121;font-weight: 500;">You did not fill out one of the required* fields !!</span>');
        return false;
    }else{
        $("#error").remove();
        $(".contact-submit").append('<label style="padding-left: 10px;color: #209119;font-size: 20px;"><i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Wait...</span></label>');

         $.ajax({
        method:"POST",
        url:Vsent_link1,
        data:$("#RqstInfo").serialize(),
        success:function(){
           $("#event-register-form").empty().append('<div><p><i class="fa fa-check-circle" aria-hidden="true"></i></p><h4>Informtion will be provided soon on following contact. We are happy to help you.</h4><h5> <i class="fa fa-smile-o" aria-hidden="true"></i></h5></div>');
           setTimeout(function(){
                window.location.reload(1);
            }, 5000);
            
        }
    });
    }
});
});
</script>
</body>
</html>