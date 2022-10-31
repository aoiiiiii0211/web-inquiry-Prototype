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
          <h1 class="h4 mb-4 font-weight-bold">お問い合わせフォーム</h1>
          <form action="/" enctype="multipart/form-data" method="POST">
            @csrf
      
            <fieldset class="mb-4">
      
              <div class="form-group">
                <label class="col-2 col-form-label" for="name">
                  氏名
                </label><br>
                <div class="col-10">
                  <input type="name" name="name" id="name" class="form-control"
                  placeholder="氏名"aria-describedby="nameHelp" value="{{old('name')}}">
                   @if ($errors->first('name'))
                     @foreach($errors->get('name') as $message)
                          <p class="validation">※{{ $message }}</p>
                      @endforeach
                   @endif
                </div>
              </div><br>

              <div class="form-group">
                <label class="col-2 col-form-label" for="subject">
                  フリガナ
                </label><br>
                <div class="col-10">
                  <input type="text" name="hurigana" id="hurigana" class="form-control"
                  placeholder="フリガナ" value="">
                </div>
              </div><br>

              <div class="form-group">
                <label class="col-2 col-form-label" for="email">
                  メールアドレス
                </label><br>
                <div class="col-10">
                  <input type="email" name="Emails" id="Emails" class="form-control"
                  placeholder="メールアドレス" value="{{old('Emails')}}">
                   @if ($errors->first('Emails'))
                     @foreach($errors->get('Emails') as $message)
                          <p class="validation">※{{ $message }}</p>
                      @endforeach
                   @endif
                </div>
              </div><br>
      
              <div class="form-group">
                <label class="col-2 col-form-label" for="email">
                  メールアドレス（確認用）
                </label><br>
                <div class="col-10">
                  <input type="email" name="Emails_confirmation" id="Emails_confirmation" class="form-control"
                  placeholder="メールアドレス（確認用）" value="{{old('Emails_confirmation')}}">
                   @if ($errors->first('Emails_confirmation'))
                     @foreach($errors->get('Emails_confirmation') as $message)
                          <p class="validation">※{{ $message }}</p>
                      @endforeach
                   @endif
                </div>
              </div><br>
              
              <div class="form-group">
                <label class="col-2 col-form-label" for="number">
                  電話番号
                </label><br>
                <div class="col-10">
                  <input type="number" name="Tel" id="Tel" class="form-control"
                   placeholder="電話番号"  value="{{old('Tel')}}">
                   @if ($errors->first('Tel'))
                     @foreach($errors->get('Tel') as $message)
                          <p class="validation">※{{ $message }}</p>
                      @endforeach
                   @endif
                </div>
              </div><br>
          
              <div class="form-label">
                <label class="col-2 col-form-label" for="new" rows="8" cols="80">
                  お問い合わせ内容
                </label><br>
                <div class="col-10">
                  <textarea type="new" name="Inquiry" id="Inquiry" class="form-control"
                  placeholder="お問い合わせ内容"  rows="8" cols="80" value="{{old('Inquiry')}}"></textarea>
                   @if ($errors->first('Inquiry'))
                     @foreach($errors->get('Inquiry') as $message)
                          <p class="validation">※{{ $message }}</p>
                      @endforeach
                   @endif
                </div>
              </div><br>
      
              <button type="submit" class="btn btn-primary">
                送信する
              </button>

            </fieldset>
          </form>
        </div>
      </div>
      
</body>
</html>