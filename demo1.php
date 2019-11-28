<?php
// Trong php Code đọc từ trái qua phải từ trên xuống dưới
// Code php và html có thể viết lồng vào nhau, php sẽ tự biên dịch
// Trong php COMMENT CODE xài: "//"
// http://localhost:8080/vscodehtml/htmlonvscode/demo1.php
?>

<?php
$str = "NGUYEN VAN A";

// cách xuất chuỗi trong PHP xài echo
// nối chuỗi trong php xài dấu '.'
echo "cách 1: " . $str;
?>
<!-- Ở đây dù trong file php, nhưng thẻ <br> sẽ đc hiểu là của html vì đoạn code không nằm trong tag <?php ?> -->
<br>
<?="cách 2: {$str}"?>

<?php
// ở đây php sẽ xuất ra chuỗi <br> => sau đó php sẽ biên dịch thành tag HTML, những tag html khác cũng tương tự
echo "<br>";
?>
<?php
// Link: một số function hổ trợ xử lý chuổi trong php
// https://www.w3schools.com/php/php_ref_string.asp
// Một số hàm hay sử dụng
// các bạn về xem kỹ những function này, sau đó xem thêm những function hổ trợ xử lý chuỗi khác

// explode : chuyển string thành array
// implode : chuyển array thành string
// trim: xóa khoản trắng ở đầu và cuối nếu có " aptech " => "aptech"
// str_replace: tìm chữ hoặc ký tự nào đó, sau đó sẽ thay thế bằng 1 giá trị mới
// strcasecmp: so sánh 2 chuỗi (ko phân biệt hoa thường)
// strcmp: so sánh 2 chuỗi (Phân biệt hoa thường)
// strlen: độ dài của chữ
// strtolower: làm in thường chữ
// strtoupper: làm in hoa chữ
// substr: cắt và lấy 1 phần chuỗi

// có chuỗi các số nối nhau bằng ','
$str_number = "1,2,3,4,5,6,7,8,9";
$result1 = explode(",", $str_number);

// Chổ này xài echo sẽ lỗi vì $result1 có kiểu dữ liệu là array
// echo $result1;
// nên để xem được dữ liệu $result1 ta sẽ tạm thời xài
var_dump($result1);
echo "<br>";

// Hoặc xài print_r
echo "<pre>";
print_r($result1);
echo "</pre>";

echo "<br>";

// có mảng tuần tự như $result1
// Tạo biến mới có giá trị được gán bởi $result1
$arr_number = $result1;
$result2 = implode(" ", $arr_number);

echo $result2;
echo "<br>";
var_dump($result2);
echo "<br>";
print_r($result2);

?>