<?
if(file_exists($file)){
    header('Content-Description: File Transfer');
    header('content-Type: application/octet-stream');
    header("Content-Disposition: attachment; filename='.basename($file)");
    header("Expires: 0");
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Lenght: '.filesize($file));
    readfile($file);
    exit;
}
