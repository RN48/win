 
<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>

    <div class="position-relative overflow-hidden p-3 p-md-5 mb-3 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
    <img src="images/razank-icon.jpeg" alt="">
    <h1 class="display-4 fst-italic">تعلم التصوير الفوتوغرافي مع رزان</h1>
    <p class="lead my-3">باقي على فتح التسجيل</p>
    <h3 id="countdown"></h3>
    </div>
  
    <div class="container">
    <ul class="list-group">
  <li class="list-group-item">تابع البث المباشر على صفحتي في الانستقرام بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن اسئلة واجوبه للجميع</li>
  <li class="list-group-item">خلال فترة الساعة سوف يتم فتح التسجيل هنا حيث ستقوم بتسجيل اسمك و ايميلك</li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
  <li class="list-group-item">الرابح سيحصل على حضور لدورة التصوير الفوتوغرافي بالجوال</li>
</ul></div>

</div>



<div class="container">
<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <h3>الرجاء ادخال المعلومات</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>">
    <div  class="form-text error"><?php echo $errors['firstNameError']; ?>
</div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>">
    <div  class="form-text error"><?php echo $errors['lastNameError']; ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
    <div  class="form-text error"><?php echo $errors['emailError']; ?></div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">ارسل</button>
</form>
</div>
  </div>

<div class="loader-con">
  <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="modalpLabel">الرابح معنا في السحب</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']);?></h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

         
<?php include_once './parts/footer.php'; ?>    
       

