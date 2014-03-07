
<!DOCTYPE html>
    <!--[if lt IE 7]>
        <html class="no-js lt-ie9 lt-ie8 lt-ie7">
    <![endif]-->
    
    <!--[if IE 7]>
        <html class="no-js lt-ie9 lt-ie8">
    <![endif]-->
    
    <!--[if IE 8]>
        <html class="no-js lt-ie9">
    <![endif]-->
    
    <!--[if gt IE 8]><!-->
        <html class="no-js"> 
    <!--<![endif]-->


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!-- Add your SEO data here -->
        <title><?= $template['title'].' '.$this->lang->line('seo_default_title') ?></title>
        
        <style>
            body {
                padding: 50px;
            }
            
            hr {
                margin: 50px 0;
            }
            
            th,
            td {
                padding: 7px 20px 7px 0;
            }
            
            th {
                padding-bottom: 0;
                
                text-align: left;
            }
            
            td {
                border-bottom: 1px solid #ccc;
            }
        </style>
    </head>
    
	<body>
    	<div class='sticky-wrapper'>
        	<header role="banner" class="hdr-main" id='header'>
            	<h1>By The Pixel - Code Example</h1>
            </header>
        
            <section class="main" role="main" id='main'>
                <?
                    
                    echo '<hr />';
                    
                    echo '<h3>Upload a File</h3>';
                    
                    echo form_open_multipart('mission');
                    
                        echo form_input(array(
                            'name' => 'userfile',
                            'type' => 'file'
                        ));
                        
                        echo form_input(array(
                            'name' => 'submit',
                            'type' => 'submit',
                            'value' => 'Upload'
                        ));
                    
                    echo form_close();
                    
                    if($upload_error) {
                        echo $upload_error;
                    }
                    
                    echo '<hr />';
                    
                    echo '<h3>Current Data</h3>';
                    
                    if($csv_data) {
                        echo '<table cellspacing="0" cellpadding="0">';
                        
                        $i = 0;
                    
                        foreach($csv_data as $c_key => $c_val) {
                            echo '<tr>';
                            
                            foreach($c_val as $key => $val) {
                                if($i== 0) {
                                    echo '<th>'.$val.'</th>';
                                } else {
                                    echo '<td>'.$val.'</td>';    
                                }
                            }
                            
                            echo '</tr>';
                            
                            $i++;
                        }
                        
                        echo '</table>';
                    } 
                ?>
            </section>
    </body>
</html>






