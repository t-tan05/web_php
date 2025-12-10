<?php

//Câu 1
    function F1($a, &$b, $c=2 )
    {
        $a*=2;
        $b-=2;
        $c--;
    
    return $a+$b+$c;
    }
    $n=1;
    $m = "1"+"2";
    $s= F1($n , $m);
    echo "1.n=$n, m= $m, s=$s"; //$n = 1, $m = 1, $s = 4;

//Câu 2
    function F2(&$a, $b=2) {
        $a+=3; $b+=3;
        return $a+$b;
    }
    $n = 2; 
    $m = array_sum([1,1,2]); //m = 4
    $s= F2($n);
    echo "<br>2. n=$n, m= $m, s=$s"; //n = 5, m = 4, s = 10;

//Câu 3
    function F3($arr, $n=3){
        $s =1;
        foreach($arr as $k=>$v)
            if ($v%2 && $k<$n)
                $s+=$arr[$k];
        return $s;
    }
    echo "<br>3.". F3([1,2,5,7, 1, 1,1]); //s = 7;

//Câu 4
    function F4($s, &$arr){ 
        $arr = explode('+', $s); //explode dùng để tách chuỗi với ký tự chỉ đỉnh và chuyển thành mảng
    }
    $a = [1,2]; 
    F4('2+1+3+4',$a); 
    $s = 2;
    foreach($a as $v)
        $s+=$v;
    echo "<br>4. $s"; //s = 12;

//Câu 5
    function F5(){ 
        $a = [1,0,2,1];
        $s =10;
        for($i=0; $i<count($a); $i++)
            if (isset( $a[$a[$i]]) ) 
                $s *= $a[$a[$i]];
        echo $s;
    }
    echo "<br>5. ";F5(); //s = 0;

//Câu 6
    function F6($a){ 
        foreach($a as $k=>$v) 
            $a[$k]+=$v+$k; // 1 += 1 + 3
        return implode('*', $a); //implode dùng để ghép các ptu trong mảng thành chuỗi
    }
    echo '<br>6.' .F6([1,1,0,1]); //2*3*2*5

//Câu 7
    function F7(&$a, $b=1, $c=4){ 
        $a=[$b, $c];
    }
    $a=[1,2,3,2]; 
    F7($a, 6);
    echo "<br>7."; foreach($a as $v) echo $v; //64

//Câu 8:  cau8.php?x=2&Y=2&z[]=3&Y=1&y=3
    $x8 = isset($_GET['x'])?$_GET['x']:-1; //x8 = 2
    $y8 = $_POST['Y']??-4; //y8 = -4 //POST sẽ không hiển thị trên url
    $z8 = isset($_REQUEST['z'])?$_REQUEST['z'][0]:-6; //z = 3
    echo "<br>8. $x8-$y8-$z8"; //2--4-3

//Câu 9
    $a=[1,0,2,3,3]; 
    $b=[];
    foreach($a as $k=>$v) 
        $b[]=$k+$v; // 1, 1 4 6 7
    $s = array_sum($b); 
    echo '<br>9:'.$s; //s = 19

//Câu 10
    $a1=array("a"=>"1","b"=>"3","c"=>"5","d"=>"2");
    $a2=array("e"=>"7","f"=>"1","g"=>"6");
    $result=array_diff($a1,$a2); //ptu trong mảng $a1 sẽ bị check xem có trùng với các ptu mảng $a2 
                                //không. Nếu có sẽ không được thêm vào $result
    echo "<br>";
    print_r($result);
    echo '<br>10:'. array_sum($result);//10

//Câu 11
    $a=[
        [2,2,1,0,5],
        [2=>1, 0=>1, 1=>1]
    ];
    $s = 0;
    foreach($a as $k=>$v)
    {
        foreach($v as $k1=>$v1){
            $s+=$v1;
        }
    }
    echo '<br>11:'.$s; //$s = 13;

//Câu 12
    $a=[
        [1,2,1],
        [6=>1, 0=>5, 1=>2]
    ];
    $s = 0;
    foreach($a as $k=>$v)
    {
        foreach($v as $k1=>$v1){
            $s += $v1-$k1; // 1
        }
    }
    echo '<br>12:'. $s; // s = 2

//Câu 13
    class A{
        const a1 = 1; 
        public static $a1 = 2;
        public $a2=3; 
        protected $a3=4;
        public function __construct($a1=5, $a2=6){
            self::$a1 = $a1; $this->a2 = $a2;
        }
        function F1(){
            $this->F2();
        }
        protected function F2()
        {
            echo self::$a1."-". self::a1.'-'.$this->a2. '-
            '.$this->a3;
            //5-1-6-4
        }
    }
    echo '<br>13:';
    $x=new A(2); //$a1 = 2;
    $x->F1(); //2-1-6-4

//Câu 14
    class A14{ 
        const a1=4; 
        public $a1;
        function __construct($x) {
            $this->a1=$x;
        }
        function F1(){ 
            echo A14::a1 + $this->a1;
        }
    }
    class B14{ 
        public $b1;
        function __construct($x=2) { 
            $this->b1=$x;
        }
        function F2() { 
            return new A14($this->b1+3); 
        }
    }
    echo '<br>14:'; 
    $b1= new B14(); //b1 = 2;
    $a1=$b1->F2(); //a1 = 5;
    $a1->F1(); //9;

//Câu 15
    class A15{ 
        const a1=6; 
        public $a1;
        function __construct($x) { 
            $this->a1=$x;
        }
        function F1(){ 
            echo A15::a1 + $this->a1+self::a1;
        }
    }
    class B15{ 
        public $b1;
        function __construct($x=6) { 
            $this->b1=$x;
        }
        function F2() { 
            return new A15($this->b1+2); 
        }
    }
    echo '<br>15:';
    $mssv="DH52201605"; 
    $c=new B15(substr($mssv,-3) %3 ); // $c = new B15(2);
    $c->F2()->f1(); //return 16;

//Câu 17
    class C{ 
        protected $c1, $c2, $c3;
        public static $c;
        function __construct($c1=1, $c2=2, $c3=3) {
            $this->c1=$c1; 
            $this->c2=$c2; 
            $this->c3=$c3;
            C::$c = $c1*$c2+$c3;
        }
        function F1() { 
            return $this->c1 + $this->c2+$this->c3 + C::$c;
        }
    }
    echo '<br>16:';
    $o = new C(5); //c1 = 5, c2 = 2, c3 = 3, c = 13
    $o2=new C(7); //c1 = 7, c2 = 2, c3 = 3, c = 17
    echo C::$c; // 17
    echo "<br>";
    echo $o->F1() * C::$c; //5 + 2 + 3 + 17 * 17;

//Câu 18
    class D{ 
        function __construct() { 
            echo 8; 
        }
        function __destruct() { 
            echo 6; 
        }
    }
    echo '<br>17:';
    $d1 = new D; //echo 8
    $d2=new D(); //ech 8
    $d1 =null; //echo 6
    $d1=new D; //echo 8
    /*
    Khi script kết thúc:

    Cả $d1 và $d2 sẽ bị huỷ tự động khi chương trình kết thúc.
    Mỗi đối tượng gọi __destruct() → mỗi cái in thêm 6.

    Nên khi chương trình kết thúc, PHP sẽ in thêm “66” (một cho $d1, một cho $d2).
    */

//Câu 19
    class E{ 
        const E1=0; 
        public $e1="202040201";
        function F1() {
            $m = explode(E::E1, $this->e1); //[2,2,4,2,1]
            $t = '02';
            foreach($m as $k=>$v) 
                $t += $k+$v; //2 + 2 + 3 + 6 + 5 + 5
            return $t;
        }
    }
    echo '<br>18:';
    $c5=new E; 
    echo $c5->F1();

//Câu 20
/*
🧩 I. Nhóm hàm sắp xếp theo giá trị
Hàm	Mô tả	Giữ nguyên key?	Ví dụ
sort()	Sắp xếp tăng dần theo giá trị	❌ Mất key	sort($arr)
rsort()	Sắp xếp giảm dần theo giá trị	❌ Mất key	rsort($arr)
asort()	Sắp xếp tăng dần, giữ nguyên key	✅ Giữ key	asort($arr)
arsort()	Sắp xếp giảm dần, giữ nguyên key	✅ Giữ key	arsort($arr)


🧩 II. Nhóm hàm sắp xếp theo key
Hàm	Mô tả	Giữ nguyên giá trị?	Ví dụ
ksort()	Sắp xếp tăng dần theo key	✅ Có	ksort($arr)
krsort()	Sắp xếp giảm dần theo key	✅ Có	krsort($arr)

🧩 III. Nhóm hàm sắp xếp theo hàm so sánh tùy chỉnh
Hàm	Mô tả	So sánh theo	Giữ key
usort()	Theo giá trị, dùng hàm callback	Giá trị	❌
uasort()	Theo giá trị, dùng callback	Giá trị	✅
uksort()	Theo key, dùng callback	Key	✅

🧩 IV. Nhóm hàm sắp xếp theo tự nhiên và ngẫu nhiên
Hàm	Mô tả	Ví dụ
natsort()	Sắp xếp theo thứ tự tự nhiên (natural order) — ví dụ “file2” < “file10”	natsort($arr)
natcasesort()	Giống natsort() nhưng không phân biệt hoa thường	natcasesort($arr)
shuffle()	Trộn ngẫu nhiên các phần tử trong mảng (mất key)	shuffle($arr)

🧩 V. Nhóm đa chiều hoặc nâng cao
Hàm	Mô tả	Ví dụ
array_multisort()	Sắp xếp nhiều mảng cùng lúc, hoặc mảng nhiều chiều	array_multisort($arr1, $arr2)
usort()	Có thể sắp mảng 2D theo cột tùy ý bằng callback	usort($arr, fn($a, $b) => $a['age'] <=> $b['age'])
*/

    $a = [2,1,1, 2,1];
    rsort($a); //Sắp xếp giảm dần
    echo "<br>";
    print_r($a);
    $s = 0;
        foreach($a as $m=>$n)
        $s += $m*$n; //
    echo '<br>20:'."s=$s " . array_sum($a); //11 7


//Câu 1
// <!-- lưu file này cùng thư mục, ví dụ index.html -->
// <form action="cau1.php" method="post" enctype="multipart/form-data">
//   File: <input type="file" name="F123" id="img123" />
//   <input type="submit" value="Upload" />
// </form>

// Thay 123 bằng 3 số cuối MSSV của bạn
$fieldName = 'F123';
$folder = __DIR__ . '/pdf123';

// Kiểm tra có file được gửi không
if (!isset($_FILES[$fieldName])) {
    echo "Không có file được gửi.";
    exit;
}

$file = $_FILES[$fieldName];

// Kiểm tra lỗi upload
if ($file['error'] !== UPLOAD_ERR_OK) {
    echo "Lỗi khi tải file. Mã lỗi: " . $file['error'];
    exit;
}

// Kiểm tra phần mở rộng là pdf (không phân biệt hoa/thường)
$filename = $file['name'];
$ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
if ($ext !== 'pdf') {
    echo "File không hợp lệ. Chỉ cho phép file có phần mở rộng .pdf";
    exit;
}

// Tạo thư mục nếu chưa tồn tại
if (!is_dir($folder)) {
    if (!mkdir($folder, 0755, true)) {
        echo "Không thể tạo thư mục lưu file.";
        exit;
    }
}

// Tạo tên file an toàn để lưu (ví dụ: timestamp + tên gốc đã lọc ký tự nguy hiểm)
$base = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', pathinfo($filename, PATHINFO_FILENAME));
$targetName = $base . '_' . time() . '.pdf';
$targetPath = $folder . '/' . $targetName;

// Di chuyển file đã upload vào thư mục đích
if (move_uploaded_file($file['tmp_name'], $targetPath)) {
    echo "Upload thành công! File lưu tại: " . htmlspecialchars($targetPath);
} else {
    echo "Không thể lưu file. Kiểm tra quyền ghi thư mục.";
}
?>

Câu 2.1: File cấu hình của Apache là:
➡️ Đáp án đúng: b. httpd.conf

Câu 2.2: Để upload 1 file lên server, form upload cần
➡️ Đáp án đúng: d. method=post enctype='multipart/form-data'

Câu 2.3: Để biết được máy client sử dụng trình duyệt nào, trong trang PHP có thể kiểm tra trong mảng nào?
➡️ Đáp án đúng: c. $_SERVER

Câu 2.4:    
$a = 7;
$b = 9;
$c = floor($b / ($b % $a));
Ta tính từng bước:

$b % $a → 9 % 7 = 2

$b / ($b % $a) → 9 / 2 = 4.5

floor(4.5) → 4 (vì hàm floor() làm tròn xuống số nguyên nhỏ nhất)

👉 Kết quả: $c = 4

✅ Đáp án đúng: b. 4

Câu 2.5:
Đề bài:

$a = 1;
$b = "1";
$c = $a === $b;
$d = $a == $b;


Phân tích:

Toán tử === → so sánh cả giá trị và kiểu dữ liệu
→ $a === $b → so sánh 1 (integer) và "1" (string) → khác kiểu
👉 $c = false

Toán tử == → so sánh chỉ giá trị, không quan tâm kiểu
→ $a == $b → 1 bằng "1" (sau khi ép kiểu)
👉 $d = true

✅ Kết quả:
$c = false, $d = true

câu 2.6:
$a = explode(' ', "02 34 56");
d. Mảng có số phần tử là 3

Câu 2.7:
$s = md5('10');
a. Chuỗi có độ dài là 32

câu 2.8:
$a = ['3'=>1, '2'=>3, '0'=>3];
$b=[];
foreach($a as $k=>$v) $b[$v]=$k;
$s=0;
foreach($b as $i) $s+=$i;
echo "s=$s";

kết quả: b. s = 3

câu 3.1
function F1(&$a, $b = 2) {
    $a += 2;
    $b -= 2;
    return $a + $b;
}

$n = 3;
$m = ceil(5.1);
$s = F1($n, $m);
echo "1. n=$n, m=$m, s=$s";
🔹 Giải thích từng bước:
Ban đầu:

$n = 3;
$m = ceil(5.1); // ceil() làm tròn lên → 6
⇒ $n = 3, $m = 6

Gọi hàm:

$s = F1($n, $m);
$a tham chiếu đến $n (dùng &)

$b là bản sao chép của $m

Trong hàm:

$a += 2; // $a = 3 + 2 = 5 → đồng thời $n = 5
$b -= 2; // $b = 6 - 2 = 4
return $a + $b; // 5 + 4 = 9
⇒ $s = 9

Sau khi gọi hàm:

$n bị thay đổi thành 5 (do truyền tham chiếu)

$m vẫn là 6 (không đổi)

$s = 9

✅ Kết quả in ra:


1. n=5, m=6, s=9

câu 3.2
function F2(&$a, $b = 5) { 
    $a++; 
    $b--; 
    return $a + $b; 
}

$n = 5;
$m = floor(3.2); // = 3
$s = F2($n);
echo "<br>2. n=$n, m=$m, s=$s";
Từng bước:
$n = 5, $m = 3

Gọi F2($n) → $a tham chiếu $n, $b = 5 (mặc định)

$a++ → $a = 6 → $n = 6

$b-- → $b = 4

return $a + $b = 6 + 4 = 10 → $s = 10

✅ Kết quả in ra:

ini
Copy code
2. n=6, m=3, s=10

câu 3.3
function F3($arr, $n = 3) {
    $s = 1;
    foreach($arr as $k => $v)
        if ($v % 2 && $k < $n)
            $s += $arr[$k];
    return $s;
}

echo "<br>3:" . F3([2, 1, 5, 7, 1, 1]);

đáp án: 3:7

câu 3.4
function F4($s, $arr) {
    $arr = explode('-', $s);
}

$a = [2, 2];
F4('2-4-5', $a);
$s = 0;
foreach($a as $v) $s += $v;
echo "<br>4. $s";

đáp án: $s = 4

câu 3.5
function F5() {
    $a = [2, 0, 1, 6, 2];
    $s = 1;
    for($i = 0; $i < count($a); $i++)
        if (isset($a[$a[$i]]))
            $s *= $a[$a[$i]];
    echo $s;
}

echo "<br>5."; 
F5();
kết quả: s = 0

câu 3.6
function F6($a) {
    return implode('0', $a);
}
echo "<br>6." . F6([2, 2, 2]);

Giải thích:

Hàm implode('0', $a) nối các phần tử của mảng $a bằng ký tự '0'.

Mảng $a = [2, 2, 2]

⇒ Khi nối lại:

"2" + "0" + "2" + "0" + "2" = "20202"


✅ Kết quả in ra:

6.20202

câu 3.7
function F7(&$a, $b = 1, $c = 4) {
    $a = [$b, $c];
}

$a = [1, 3, 2];
F7($a, 2);
echo "<br>7.";
foreach($a as $v) echo $v;

Giải thích từng bước:

Ban đầu:

$a = [1, 3, 2];


Gọi hàm:

F7($a, 2);


$a được truyền tham chiếu (&) → sẽ bị thay đổi.

$b = 2, $c = 4 (giá trị mặc định vì không truyền).

Trong hàm:

$a = [$b, $c]; // tức $a = [2, 4];


Sau khi thoát hàm:

$a = [2, 4];


Vòng lặp in ra:

24


✅ Kết quả in ra:

7.24

câu 3.8
URL:

cau8.php?x=18&y=28&z[]=3&y=0


Script:

$x8 = isset($_GET['x']) ? $_GET['x'] : -1;
$y8 = isset($_GET['y']) ? $_GET['y'] : -1;
$z8 = isset($_REQUEST['z']) ? $_REQUEST['z'][0] : -1;
echo "<br>8. $x8 - $y8 - $z8";

Phân tích từng phần:
🧩 Dữ liệu nhận được từ URL:
Biến	Giá trị
x	18
y	0 (giá trị cuối cùng ghi đè 28)
z[]	mảng có 1 phần tử [3]
🧮 Gán giá trị:

$x8 = 18

$y8 = 0

$z8 = 3 (vì $_REQUEST['z'][0] = 3)

🧾 Xuất ra:
echo "<br>8. $x8 - $y8 - $z8";


→ Kết quả hiển thị là:

8. 18-0-3


✅ Kết quả cuối cùng:

8. 18-0-3


câu 3.9
$a = [1, 3, 6];
$b = [];
foreach($a as $k => $v)
    $b[] = $k + $v;
$s = array_sum($b);
echo "<br>9: $s";

Giải thích từng bước:

Mảng $a:

Chỉ số ($k$)	Giá trị ($v$)	$k + v$
0	1	1
1	3	4
2	6	8

⟹ $b = [1, 4, 8]

Tổng:

$s = array_sum($b) = 1 + 4 + 8 = 13;


✅ Kết quả in ra:

9: 13

Câu 3.10
$a = [0, 0, 0, 0, 0, 1, 1];
$b = array_rand($a, 4);
$s = array_sum($b);
$tong = 0;

if ($s <= 2)
    $tong = 1;
elseif ($s <= 5)
    $tong = 3;
else
    $tong = 2;

echo "<br>10:$tong";

Giải thích:

array_rand($a, 4) chọn 4 chỉ số ngẫu nhiên khác nhau trong mảng $a.
Mảng $a có 7 phần tử → chỉ số từ 0 → 6.

👉 $b sẽ là mảng chứa 4 chỉ số ngẫu nhiên (ví dụ [0, 2, 5, 6]).

Tính $s:
$s = array_sum($b); // tổng của 4 chỉ số ngẫu nhiên


Vì các chỉ số có thể là bất kỳ 4 số trong [0, 1, 2, 3, 4, 5, 6],
nên $s có thể thay đổi mỗi lần chạy.

Sau đó:
if ($s <= 2) $tong = 1;
elseif ($s <= 5) $tong = 3;
else $tong = 2;


👉 Như vậy:

Nếu tổng 4 chỉ số ≤ 2 → $tong = 1 (khó xảy ra)

Nếu tổng 4 chỉ số ≤ 5 → $tong = 3

Ngược lại → $tong = 2

Vì khi chọn 4 chỉ số ngẫu nhiên từ 0–6, tổng chắc chắn > 5,
nên gần như luôn rơi vào trường hợp cuối.

✅ Kết quả in ra (thực tế khi chạy):

10:2

câu 3.11

$a = [
    [1, 4, 1],
    [2 => 2, 3 => 2, 4 => 2]
];

$s = 0;
foreach ($a as $k => $v) {
    foreach ($v as $k1 => $v1)
        $s += $v1;
}
echo $s;

Phân tích từng phần:
Mảng $a có 2 phần tử:
$a[0] = [1, 4, 1];
$a[1] = [2 => 2, 3 => 2, 4 => 2];

Vòng lặp 1: duyệt từng phần tử $v của $a
✅ Lần 1: $v = [1, 4, 1]

Cộng tất cả phần tử:

$s = 0 + 1 + 4 + 1 = 6

✅ Lần 2: $v = [2 => 2, 3 => 2, 4 => 2]

Cộng tiếp:

$s = 6 + 2 + 2 + 2 = 12


✅ Kết quả cuối cùng:

$s = 12


👉 Output:

12

câu 3.12
$a = [
    [1, 3, 1],
    [2 => 3, 0 => 1, 1 => 5]
];

$s = 0;
foreach($a as $k => $v) {
    foreach($v as $k1 => $v1)
        $s += $k1;
}
echo $s;


Phân tích chi tiết:
Mảng $a có 2 phần tử con:
$a[0] = [1, 3, 1];          // chỉ số tự động: 0, 1, 2
$a[1] = [2 => 3, 0 => 1, 1 => 5]; // chỉ số: 2, 0, 1

Duyệt từng phần tử:
✅ Lần 1: $v = [1, 3, 1]

Chỉ số: 0, 1, 2
→ Tổng chỉ số: 0 + 1 + 2 = 3
→ $s = 3

✅ Lần 2: $v = [2 => 3, 0 => 1, 1 => 5]

Chỉ số: 2, 0, 1
→ Tổng chỉ số: 2 + 0 + 1 = 3
→ $s = 3 + 3 = 6

✅ Kết quả cuối cùng:

$s = 6


👉 Output:

6
?>


