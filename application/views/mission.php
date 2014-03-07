<?
    
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
    
    if($csv_data) {
        echo '<table>';
    
        foreach($csv_data as $c_key => $c_val) {
            echo '<tr>';
            
            foreach($c_val as $key => $val) {
                echo '<td>'.$val.'</td>';
            }
            
            echo '</tr>';
        }
        
        echo '</table>';
    }
    
    
?>