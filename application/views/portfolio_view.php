<head>        
    <link rel="stylesheet" href="../css/pages.css">
</head>
<body>
    <div class="title">
        <h2>Наши работы</h2>
    </div>   
    <div class="">   
        <div class="table">
            <table>
                <?php 
                    foreach($data as $row) {
                        echo '<tr><td><img src="'.$row['img'].'" alt=""></td><td>'.$row['desc'].'</td>';
                    }                
                ?>
            </table>
        </div>
    </div>
</body>
