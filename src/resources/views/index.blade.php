<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
      FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
          @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--name">
              <input type="text" name="last_name" required placeholder="例:山田" value="{{ old('last_name', session('contact.last_name', '')) }}" />
              <input type="text" name="first_name" required placeholder="例:太郎" value="{{ old('first_name', session('contact.first_name', '')) }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <label>
                <input type="radio" name="gender" value="male" required {{ old('gender', session('contact.gender', 'male')) == 'male' ? 'checked' : '' }}>男性
              </label>
              <label>
                <input type="radio" name="gender" value="female" {{ old('gender', session('contact.gender', 'male')) == 'female' ? 'checked' : '' }}>女性
              </label>
              <label>
                <input type="radio" name="gender" value="other" {{ old('gender', session('contact.gender', 'male')) == 'other' ? 'checked' : '' }}>その他
              </label>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--email">
              <input type="email" name="email" required placeholder="例:test@example.com" value="{{ old('email', session('contact.email', '')) }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--tel">
              <input type="tel" name="tel-1" maxlength="3" pattern="\d{0,3}" placeholder="080" value="{{ old('tel-1', session('contact.tel-1', '')) }}" />
              <span>-</span>
              <input type="tel" name="tel-2" maxlength="4" pattern="\d{0,4}" placeholder="1234" value="{{ old('tel-2', session('contact.tel-2', '')) }}" />
              <span>-</span>
              <input type="tel" name="tel-3" maxlength="4" pattern="\d{0,4}" placeholder="5678" value="{{ old('tel-3', session('contact.tel-3', '')) }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--address">
              <input type="text" name="address" required placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address', session('contact.address', '')) }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div><div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--building">
              <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building', session('contact.building', '')) }}" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--select">
              <select name="inquiry-type" required>
                <option value="" disabled selected>選択してください</option>
                <option value="delivery" {{ old('inquiry-type', session('contact.inquiry-type')) == 'delivery' ? 'selected' : '' }}>商品のお届けについて</option>
                <option value="exchange" {{ old('inquiry-type', session('contact.inquiry-type')) == 'exchange' ? 'selected' : '' }}>商品の交換について</option>
                <option value="trouble" {{ old('inquiry-type', session('contact.inquiry-type')) == 'trouble' ? 'selected' : '' }}>商品トラブル</option>
                <option value="contact" {{ old('inquiry-type', session('contact.inquiry-type')) == 'contact' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
                <option value="other" {{ old('inquiry-type', session('contact.inquiry-type')) == 'other' ? 'selected' : '' }}>その他</option>
              </select>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" required placeholder="お問い合わせ内容をご記載ください">{{ old('content', session('contact.content', '')) }}</textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
