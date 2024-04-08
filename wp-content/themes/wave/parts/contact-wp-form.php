<div class="form">
  <p class="form-desc">お問い合わせはこちらよりお願いいたします。</p>

  <div class="form-content">
    <div class="form-fields">
      <label class="form-label is-required">お名前</label>
[mwform_text name="name"]
    </div>

    <div class="form-fields">
      <label class="form-label is-required">メールアドレス</label>
[mwform_text name="email"]
    </div>

    <div class="form-fields">
      <label class="form-label">社名</label>
[mwform_text name="company_name"]
    </div>

    <div class="form-fields">
      <label class="form-label is-required">お問合せ種別</label>
      <div class="form-radio-group">
[mwform_radio name="inquiry_type" children="新規お取引について1:新規お取引について1,新規お取引について2:新規お取引について2,新規お取引について3:新規お取引について3"]
      </div>
    </div>

    <div class="form-fields">
      <label class="form-label is-required">予算</label>
      <div class="">
[mwform_select name="budget" children="option1:option1,option2:option2,option3:option3"]
      </div>
    </div>

    <div class="form-fields">
      <label class="form-label is-required">お問い合わせ内容</label>
[mwform_textarea name="details"]
    </div>
  </div>

  <div class="form-bottom">
    <div class="form-settings">
      <label class="form-label-radio">
        <input type="checkbox">
        <span><a href="/">プライバシーポリシー</a>に同意する</span>
      </label>
    </div>
    <div class="form-actions">
      <a href="" class="form-button"><span class="form-button-icon"></span>送信する</a>
    </div>
  </div>
</div>