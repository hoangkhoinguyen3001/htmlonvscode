<?php

/**
 * chú ý trong việc khai báo function
 * trong function các biến được truyên vào gọi là parameter nhưng mà chúng ta hay gọi tắt là param
 * với những param kho khai báo giá trị mặc định (default), khi gọi function thì những param đó bắt buộc phả có giá trị
 * với những param có giá trị mặc đinh, khi gọi function thì có thể truyền hoặc không
 */
function demo($a, $flag = '') {
    $result = __kiemtra_flag($flag);
    if($result === true) {
        echo "hello world";
    } else if($result === false) {
        echo "hello my friend";
    } else {
        echo "Giá trị của a là: {$a}";
    }
}

function __kiemtra_flag($flag) {
    if(!empty($flag) && $flag === true) {
        return true;
    } else if(!empty($flag) && $flag === false) {
        return false;
    } else {
        return false;
    }
}

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

?>