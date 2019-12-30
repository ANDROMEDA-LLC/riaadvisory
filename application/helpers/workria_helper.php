<?php



function workriaFilesUpload($image) {
    
    $ci = get_instance();
    $config = Array(
        'upload_path' => 'uploads/workria',
        'file_name' => 'workria' . rand(),
        'allowed_types' => 'pdf|csv',
        'max_size' => 1024,
        'remove_spaces' => true
    );
    $ci->load->library('upload', $config);
    if ($ci->upload->do_upload($image)) {
        $image = $ci->upload->data();
        $result['result'] = 1;
        $result['fileName'] = $image['file_name'];
    } else {
        $result['result'] = 0;
        $result['hata'] = $ci->upload->display_errors();
    }
    return (object) $result;
}
