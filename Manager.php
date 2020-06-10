<?php
    if (session_id() === '')
    session_start();
    
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
        public function __destruct()
        {
            self::$count-=1 ;
            // unset($this);

        }
        public static function ShowInfo(){
            return self::$manager;
        }

    }
    function deleteEmployee($person){
            $person->__destruct();
            $arrayDelete = array(
                "name" => $person->getFirstName().$person->getLastName(),
                "DOB" => $person->getDayOfBirth(),
                "Address" => $person->getAddress(),
                "Job" => $person->getJob()
            );
            for ($i = 0;$i<count(ManagerEmployee::$manager);$i++){
            if (empty(array_diff(ManagerEmployee::$manager[$i],$arrayDelete))){
                unset(ManagerEmployee::$manager[$i]);
            }
        }
        unset($person);
        } 
        if( isset( $_SESSION['array'] ) ) {
            // array_push ($_SESSION,$employ[0]);
            $person = $_SESSION['array'];

        }else {
            $person=[];
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            // if ($_POST['submit']){
                if (isset($_REQUEST["firstName"])&&isset($_REQUEST["lastName"])&&isset($_REQUEST["dob"])&&isset($_REQUEST['address'])&&isset($_REQUEST['job'])){
                    $employ = new ManagerEmployee($_REQUEST["firstName"],$_REQUEST["lastName"],$_REQUEST["dob"],$_REQUEST["address"],$_REQUEST["job"]);     
                    array_push($person,$employ);
                    $_SESSION['array'] = $person;
                    // }
                    // $_SESSION['array'] = $employ;               
            }
        }
        $per1 = new ManagerEmployee("Hoàng","Lân","1/1/1999","Hương thủy","Student");
        $per2 = new ManagerEmployee("Ngọc","Thắng","1/1/1999","Huế","Student");
        $per3 = new ManagerEmployee("Phạm","Thạnh","1/1/1999","Huế","Student");
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Manager.php" method="POST">
        <label for="">First Name</label>
        <input type="text" name="firstName" id="firstName">
        <label for="">LastName</label>
        <input type="text" name="lastName" id="lastName">
        <label for="">Ngày sinh</label>
        <input type="text" name="dob" id="dob">
        <label for="">Địa chỉ</label>
        <input type="text" name="address" id="address">
        <label for="">Job Poisition</label>
        <input type="text" name="job" id="job">
        <input type="submit" value="Submit" name="submit">
    </form>
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