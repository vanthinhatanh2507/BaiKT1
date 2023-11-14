<?php
    // I. Trắc nghiệm
    // Câu 1. Kết quả in ra: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )
    // Câu 2. a, True
    // Câu 3. a, array()
    // Câu 4. a, readfile()
    // Câu 5. b, Chuyển đổi một đối tượng thành một chuỗi
    // II. Bài tập 
    // Bài 1: Viết một chương trình PHP để hiển thị dãy số Fibonacci. Yêu cầu:
    // - Tạo một hàm generateFibonacci nhận một số nguyên dương n và trả về dãy số Fibonacci đầu tiên có n phần tử.
    // - Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử.
    function generateFibonacci($n) {
        $fibonacci = array();
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;
        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        return $fibonacci;
    }
    $n = 10; 
    $daySoFibonacci= generateFibonacci($n);
    echo "1. Dãy số Fibonacci đầu tiên có $n phần tử: ";
    foreach ($daySoFibonacci as $number) {
        echo $number . " ";
    }
    echo "<br>";
    // Bài 2: Viết một ứng dụng PHP để quản lý thông tin về học sinh trong một lớp học sử dụng mảng kết hợp. Yêu cầu:
    // - Tạo một mảng kết hợp chứa thông tin về học sinh với các khóa như id, name, age, và grade.
    // - Hiển thị thông tin của tất cả học sinh trong mảng.
    // - Viết hàm để tìm học sinh có điểm cao nhất (grade).
        // Mảng kết hợp chứa thông tin của học sinh
    $hocSinh = array(
        array(
            "id" => 1,
            "name" => "Nhật Anh",
            "age" => 19,
            "grade" => 9
        ),
        array(
            "id" => 2,
            "name" => "Hữu Đức",
            "age" => 20,
            "grade" => 10
        ),
        array(
            "id" => 3,
            "name" => "Linh Hg",
            "age" => 21,
            "grade" => 8
        ),
        array(
            "id" => 4,
            "name" => "Nụ Kelmy",
            "age" => 21,
            "grade" => 7
        ),
    );
    echo "2. Thông tin của tất cả học sinh: <br>";
    foreach ($hocSinh as $hocsinh) {
        echo "ID là: " . $hocsinh['id'] . ", Họ tên là: " . $hocsinh['name'] . ", Tuổi là: " . $hocsinh['age'] . ", Điểm là: " . $hocsinh['grade'] . "<br>";
    }
    function timHocSinh($hocSinh) {
        $max = 0;
        $hocsinhdiemcao = null;
        foreach ($hocSinh as $hocsinh) {
            if ($hocsinh['grade'] > $max) {
                $max = $hocsinh['grade'];
                $hocsinhdiemcao = $hocsinh;
            }
        }
        return $hocsinhdiemcao;
    }
    $hocsinhdiemcao = timHocSinh($hocSinh);
    if ($hocsinhdiemcao) {
        echo "Học sinh có điểm cao nhất là: <br>";
        echo "ID là: " . $hocsinhdiemcao['id'] . ", Họ tên là: " . $hocsinhdiemcao['name'] . ", Tuổi là: " . $hocsinhdiemcao['age'] . ", Điểm là: " . $hocsinhdiemcao['grade'];
    } else {
        echo "<br>Không có học sinh nào trong danh sách.";
    }
?>
