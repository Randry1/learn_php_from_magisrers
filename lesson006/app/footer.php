        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="public/js/bootstrap.js"></script>




        <?php
        class User {
            public $username = 'Владислав';
            public $email = "aa@aa.ru";

            public function GetUser(){
                return $this->username;
            }

            public function getEmail(){
                return $this->email;
            }
        }

        $user = new User();
        $username = $user->GetUser();
        $user_email = $user->getEmail();

        echo $username;
        echo '<br/>';
        echo  $user_email;
        ?>
    </body>
</html>