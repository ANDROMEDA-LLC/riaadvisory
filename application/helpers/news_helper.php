<?php

function safeUrl($sentence) {
    return url_title(convert_accented_characters($sentence), "dash", TRUE);
}

function newsImageUpload($image) {
    $ci = get_instance();
    $config = Array(
        'upload_path' => 'uploads/news',
        'file_name' => 'blog' . rand(),
        'allowed_types' => 'gif|jpg|png|jpeg',
        'max_size' => 1024,
        'max_width' => 1204,
        'max_height' => 768,
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
