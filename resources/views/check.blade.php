<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>お問い合わせ</title>
</head>
<body>
    <div class="container mt-4">
        <div class="border p-4">
          <h1 class="h4 mb-4 font-weight-bold">入力確認</h1>
          <form action="/complete" enctype="multipart/form-data" method="POST" id="new">
            @csrf
      
            <fieldset class="mb-4">
      
              <div class="form-group">
                <label class="col-2 col-form-label" for="name">
                  氏名
                </label><br>
                <div class="col-10">
                    {{ $name }}
                    <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="name"
                aria-describedby="Inquiry_content" value="{{ $name }}">
                </div>
              </div><br>

              <div class="form-group">
                <label class="col-2 col-form-label" for="subject">
                  フリガナ
                </label><br>
                <div class="col-10">
                    {{ $hurigana }}
                    <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="hurigana"
                aria-describedby="Inquiry_content" value="{{ $hurigana }}">
                </div>
              </div><br>

              <div class="form-group">
                <label class="col-2 col-form-label" for="email">
                  メールアドレス
                </label><br>
                <div class="col-10">
                    {{ $Emails }}
                    <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="Emails"
                aria-describedby="Inquiry_content" value="{{ $Emails }}">
                </div>
              </div><br>
      
              <div class="form-group">
                <label class="col-2 col-form-label" for="email">
                    メールアドレス（確認用）
                </label><br>
                <div class="col-10">
                    {{ $Emails_confirmation }}
                    <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="Emails_confirmation"
                aria-describedby="Inquiry_content" value="{{ $Emails_confirmation }}">
                </div>
              </div><br>
              
              <div class="form-group">
                <label class="col-2 col-form-label" for="number">
                  電話番号
                </label><br>
                <div class="col-10">
                  {{ $Tel }}
                  <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="Tel"
                aria-describedby="Inquiry_content" value="{{ $Tel }}">
                </div>
              </div><br>
          
              <div class="form-group">
                <div class="col-10">
                  <label class="col-2 col-form-label" for="new">
                    お問い合わせ内容
                  </label><br>
                  {{ $Inquiry }}
                  <input type="hidden" class="form-control" readonly id="exampleInputInquiry_content" name="Inquiry"
                aria-describedby="Inquiry_content" value="{{ $Inquiry }}">
                </div>
              </div><br>
            </fieldset>
            <button type="submit" class="btn btn-primary">送信する</button>
          </form>
      
          <!-- Optional JavaScript; choose one of the two! -->
      
          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
              crossorigin="anonymous"></script>
      
          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
          -->
        </div>
      </div>
      <!-- Optional JavaScript; choose one of the two! -->
      
          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
              crossorigin="anonymous"></script>
      
          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
          -->
</body>
</html>