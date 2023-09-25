<?php
include './inc/dd.php';
include './inc/form.php';

$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn, $sql );
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>


<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>محمد طالع العسيري</title>
</head>
<body>

     <div class="position-relative overflow hidden p-3 p-md-5 m-md-3 text-center bg-light">
     <div class="col-md-5 p-lg-5 mx-auto">
      <img src="images/abo-norah.jpeg" alt="">
     <h1 class="display-4 fw-normal">اربح مع ابو نورة</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل </p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
</div>
      <div class="container">
      <h3>للدخول في السحب اتبع مايلي:</h3>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور أعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة و أجوبة حرة للجميع </li>
  <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل أسمك وإيميلك </li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي </li>
  <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>


   
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
  <h3>الرجاء أدخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors ['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors ['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors ['emailError'] ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary"> أرسال المعلومات</button>
</form>
</div>
</div>



 <div class="loader-con">
  <div id="loader">
	<canvas id="circularLoader" width="200" height="200">
    
  </canvas>
</div>
</div>
</div>

<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
اختيار الرابح
</button>
</div>
<!--<canvas class="confetti" id="canvas"></canvas>--->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="modalabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']).' ' .htmlspecialchars($user['lastName']) ?></h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>


      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/loader.js"></script>
<!--<script src="./js/confetti.js"></script>-->
<script src="./js/script.js"></script>
    
</body>
</html>
      