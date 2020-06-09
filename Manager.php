<?php
    class Employee{
      protected $firstName;
      protected $lastName;
      protected $dayOfBirth;
      protected $address;
      protected $job;  

      public function __construct($firstName,$lastName,$dayOfBirth,$address,$job){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dayOfBirth = $dayOfBirth;
        $this->address = $address;
        $this->job = $job;
      }
      public function getFirstName(){
          return $this->firstName;
      }

      public function getLastName(){
        return $this->lastName;
    }

    public function getDayOfBirth(){
        return $this->dayOfBirth;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getJob(){
        return $this->job;
    }
    
    }

    class ManagerEmployee extends Employee {
        static public $manager = [];
        static public $count = 0;
        public function __construct($firstName,$lastName,$dayOfBirth,$address,$job){
            parent::__construct($firstName,$lastName,$dayOfBirth,$address,$job);
            self::$count++;
            $fullname = $this->firstName.$this->lastName;
            $person = array(
                "name"=> $fullname,
                "DOB"=>$this->dayOfBirth,
                "Address" => $this->address,
                "Job"=>$this->job);
            array_push(self::$manager,$person);
        }
        public static function ShowInfo(){
            return self::$manager;
        }
    }


    $per1 = new ManagerEmployee("Pham","Đức","25/06/1995","Hà Tịnh","Student");
    $per2 = new ManagerEmployee("Pham","Đạt","27/06/1995","Huế","Student");
    $per3 = new ManagerEmployee("Pham","Thành","26/06/1995","Huế","Student");
    $per4 = new ManagerEmployee("Pham","Lân","23/06/1995","Huế","Student");
    $per5 = new ManagerEmployee("Pham","Bình","22/06/1995","Huế","Student");
    $per6 = new ManagerEmployee("Pham","Thạnh","21/06/1995","Huế","Student");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="0">
        <caption>
            <h2>Danh sách nhân viên</h2>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Vị trí</th>
        </tr>
        <?php if (count(ManagerEmployee::$manager) === 0) : ?>
            <tr>
                <td colspan="5" class="message">Không tìm thấy nhân viên nào</td>
            </tr>
        <?php endif; ?>

        <?php foreach (ManagerEmployee::$manager as $key => $value) : ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['DOB']; ?></td>
                <td><?php echo $value['Address']; ?></td>
                <td><?php echo $value['Job']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>