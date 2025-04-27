<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header>
        <div class="logo">
            <h1>FashionablyLate</h1>
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
                        <label for="last-name" class="form__label--item">お名前</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="last-name" id="last-name" placeholder="例）山田" />
                            <input type="text" name="first-name" id="first-name" placeholder="例）太郎" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能入れる-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">性別</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--radio">
                            <label>
                                <input type="radio" name="gender" value="male" checked>男性
                            </label>
                            <label>
                                <input type="radio" name="gender" value="female">女性
                            </label>
                            <label>
                                <input type="radio" name="gender" value="other">その他
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label for="email" class="form__label--item">メールアドレス</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" id="email" placeholder="例:test@example.com" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label for="tel1" class="form__label--item">電話番号</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--tel">
                            <input type="tel" name="tel1" id="tel1" maxlength="5" placeholder="080" />-
                            <input type="tel" name="tel2" id="tel2" maxlength="4" placeholder="1234" />-
                            <input type="tel" name="tel3" id="tel3" maxlength="4" placeholder="5678" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label for="address" class="form__label--item">住所</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" id="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label for="building" class="form__label--item">建物名</label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building" id="building" placeholder="例:千駄ヶ谷マンション101" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label for="inquiry-type" class="form__label--item">お問い合わせの種類</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--select">
                            <select name="inquiry-type" class="form__select" id="inquiry-type" required>
                                <option value="" selected disabled hidden>選択してください</option>
                                <option value="product">商品のお届けについて</option>
                                <option value="product">商品の交換について</option>
                                <option value="product">商品トラブル</option>
                                <option value="order">ショップへのお問い合わせ</option>
                                <option value="other">その他</option>
                            </select>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <label for="inquiry-content" class="form__label--item">お問い合わせ内容</label>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="inquiry-content" id="inquiry-content" cols="40" rows="5"
                                placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能入れる-->
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