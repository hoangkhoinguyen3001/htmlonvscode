<?php

// Khai báo mảng rỗng
$array = [];
$array = array();

$arr = ["xanh", "do", "vang", 23, 25, 27];
/*
1)Tạo 2 biến kiểu array (mảng), $arr_str dùng để lưu phần tử chữ, $arr_number để lưu phần tử số
Duyệt tuần tự các phần tử trong $arr, kiểm tra phần tử đó là chữ hay số
- Nếu là chữ, đẩy phần tử đó vào $arr_str
- Nếu là số, đẩy phần tử đó vào $arr_number
Dùng for hoặc while

2) Xóa tất cả phần tử là chữ trong $arr
và thêm vào $arr các phần tử 5, 7, 50, 70

3) sắp sếp các phần tử tăng dần mảng $arr
4) sắp sếp các phần tử giảm dần mảng $arr

*/
// Làm ở vùng này
// ...code here
$arr_str = array(); // biến lưu pt là chữ
$arr_number = array(); // biến lưu pt là số

// count($arr) đếm mảng có bao nhiêu phần tử trong mảng
for ($i=0; $i < count($arr); $i++) { // $i++ => $i = $i + 1
    if(is_string($arr[$i])) {
        // Cách 1: đẩy phần tử vào mảng
        array_push($arr_str, $arr[$i]);

        // Cách 2: đẩy phần tử vào mảng
        // $arr_str[] = $arr[$i];
        unset($arr[$i]); // xóa phần tử trong mảng
    }

    /**
     * isset: dùng để kiểm tra biến có được khỏi tạo hay chưa
     * unset: dùng để xóa biến được khỏi tạo
     * Biến chạy từ trái->phải trên->dưới, ở câu trên mình check phần tử là chữ, nếu đúng sẽ xóa phần tử đó
     * nên phần tử sau khi unset ở trên đem xuống xử lý ở dưới sẽ báo là không tìm thấy
     * VD: Trong lần chạy đầu tiên $i=0; $arr[0] = 'xanh', nhưng theo đk ở trên thì chạy vào if check is_string()=>true=>unset
     * lúc này nếu dùng is_numeric($arr[$i]) chạy sẽ bị lỗi => NOTICE thống báo Undefine offset 0 ($arr[0] không tìm thấy)
     * để tránh trường hợp trên, ta sẽ check biến/ phần tử có tồn tại không
     */
    if(isset($arr[$i]) && is_numeric($arr[$i])) {
        $arr_number[] = $arr[$i];
    }
}

// gán các phần tử mới bằng vòng lập foreach
$temp = [5,7,50,70];
foreach ($temp as $key => $value) {
    /**
     * các bạn có thể thay đổi key của phần tử trong mảng
     * mỗi phần tử trong mảng luôn đi theo 1 cặp Key => Value
     * Key đại diện cho nơi ở của giá trị trong mảng
     * trong ngôn ngữ lập trình còn gọi chung là Offset, dùng để nói vị trí của phần tử trong mảng
     */
    $arr[] = $value;
}
// gán các phần tử mới bằng array_push
// array_push($arr,5,7,50,70);

// END

/**
 * Một số function phổ biến hổ trợ array
 * in_array: kiểm tra giá trị đó có nằm trong mảng được chỉ định hay ko (Rất hay xài)
 * array_push: đẩy phần tử vào mảng
 * array_chunk: chia array lớn thành nhìu array nhỏ, mỗi array nhỏ có tối đa số phần tử chỉ định
 * array_combine(xem qua, chứ ít xài): kết hợp 2 mảng thành 1, trong đó 1 mảng đóng vai trò key, 1 mảng đóng vai trò value
 * array_diff: so sánh 2 mảng và trả về 1 mảng có chứa những giá trị khác nhau
 * -- ngoài ra còn có nhiu array_diff khác các bạn lên w3school xem sơ qua
 * array_keys: trả về 1 mảng gồm tất cả các key trong mảng được chỉ định
 * array_values: trả về 1 mảng gồm tất cả các value trong mảng được chỉ định
 * array_merge: lấy tất cả phần tử của các mảng truyền vào và tạo ra 1 mảng mới
 * -- array_merge_recursive: tương tụ như trên nhưng:
 * -- -- array_merge những phần tử có cùng key sẽ bị đè lên nhau
 *          (vd: $a[0] = 13; sau đó $a[0] = 1; tại 1 vị trí đó value mới liên tục được thay vào)
 * -- -- array_merge_recursive những phần tử cùng key thì tại vị trí key đó sẽ là 1 array chưa những value cùng key
 * array_rand: trả về mảng chưa phần tử ngẩu nhiên trong 1 mảng được chỉ định
 * array_search: tìm 1 phần tử trong mảng và trả về key của phần tử đó
 * -- array_search có 3 parameter, param thứ 3 không truyền vào, default là false, nếu vào truyền true thì lúc function chay sẽ có kết quá khác
 * -- -- false: $arr = ["a"=>5, "b"=>"5"] => array_search("5", $arr); kết quả = a (value tìm chỉ cần cùng giá trị)
 * -- -- true: $arr = ["a"=>5, "b"=>"5"] => array_search("5", $arr); kết quả = b (value tìm cần cùng kiểu data và cùng giá trị)
 * Một số hàm sort trong mảng: arsort(), asort(), krsort(), ksort()	 ..... còn 1 số cái khác nữa, các bạn tự tìm hiểu nhé
 * 
 */
/**///if (in_array("ravi", $name, TRUE)) 
  /*{ 
    echo "found \n"; 
    } 
  else
    { 
    echo "not found \n"; 
    } 
    
  if (in_array(87, $name, TRUE)) 
    { 
    echo "found \n"; 
    } 
  else
    { 
    echo "not found \n"; 
    } 
    
  if (in_array("87", $name, TRUE)) 
    { 
    echo "found \n"; 
    } 
  else
    { 
    echo "not found \n"; 
    } 
  
    // check numbers array by function
    /*function check($array) {
      foreach($array as $value) {
           if (!is_numeric($value)) {
                return false;
           } 
      }
      return true;
  }*
   */ 
?>