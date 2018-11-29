<div class="booking-form container row col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
  <table border="none">
  <tr>
    <td colspan="2"><h2 class="underlined_header">Slow Time ネット予約</h2></td>
  </tr>
  <tr>
    <td colspan="2"><span class="red">*</span>は必須項目です<br>お問い合わせは0120-78-2340まで<br><br>【営業時間】<br>10:00～18:30(最終受付17:30)<br>※ 日・月曜定休日<br>
    <span style="color: red;">※ 2018年4月1日(日)から営業時間が変更になりました。</span><p></td>
  </tr>




  <tr>
    <label>
      <th><span class="red">*</span>お名前</th>
      <td>[text booking-name class:input-form placeholder akismet:author "例：山田　花子"]</td>
    </label>
  </tr>

  <tr>
      <th><span class="red">*</span>性別</th>
      <td>[checkbox* booking-sex "女性" "男性"]</td>
  </tr>

  <tr>
    <label>
      <th><span class="red">*</span>電話番号</th>
      <td>[tel* booking-tel class:input-form placeholder "例：123-456-7890"]</td>
    </label>
  </tr>




  <tr>
    <label>
      <th><span class="red">*</span>メールアドレス</th>
      <td>[email* booking-email class:input-form placeholder"例：example@gmail.com"]</td>
    </label>
  </tr>

  <tr>
    <label>
      <th  valign="top" class="valign-top-padding"><span class="red">*</span>ご希望日<p></p><p></p><p></p></th>
      <td>[date* booking-date date-format:mm/dd/yy class:input-form placeholder"クリックして日付を選択"]<br><span class="red"><strong>当日のご予約はお電話でお願いいたします</strong></span><br>※日・月曜日は定休日です</td>
    </label>
  </tr>

  <tr>
    <div class="form-group wpcf7-form-control-wrap booking-course">
      <label for="booking-time" class="control-label col-xs-2 wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
        <th valign="top" class="valign-top-padding"><span class="red"></span>ご希望のお時間</th>
        <td>
          <span class="wpcf7-form-control-wrap booking-time">
            <select class="form-control wpcf7-form-control wpcf7-select wpcf7-validates-as-required" name="booking-time" aria-required="true" aria-invalid="false">
              <option value="">---</option>
              <option value="10:00">10:00</option>
              <option value="11:00">11:00</option>
              <option value="14:00">14:00</option>
              <option value="15:00">15:00</option>
              <option value="16:00">16:00</option>
              <option value="17:00">17:00</option>
            </select>
          </span>
          <p><span class="red">閉店時間は18:30です。<br>ご希望メニューの内容によっては、受付できない場合がございます。</span></p>
        </td>
      </label>
    </div>
  </tr>

  <tr>
    <div class="form-group">
      <th valign="top" class="valign-top-padding"><span class="red">*</span>コース<br><small>※価格は税込</small></th>
      <td>
        <label for="booking-course-2" class="width-100 control-label wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
          <span class="wpcf7-form-control-wrap booking-course-2">
            <div class="course-group">
              <p>■ 薬草酵素温浴</p>
              <select class="form-control wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false" name="booking-course-2">
                <option value="">---</option>
                <option value="薬草酵素温浴30分 1名様｜3780円">薬草酵素温浴30分 1名様｜3780円</option>
              </select>
              <p class="red">※2名様以上のご予約はお電話にてお願いいたします</p>
            </div>
          </span>
        </label>
      </td>
    </div>
  </tr>

  <tr>
    <label>
      <th valign="top" class="valign-top-padding">メッセージ</th>
      <td><span class="wpcf7-form-control-wrap booking-message">
          <textarea name="booking-message" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="なにかございましたらこちらにどうぞ"></textarea>
        </span></td>
    </label>
  </tr>

  <tr>
    <th></th>
    <td><label>[checkbox* confirm exclusive "入力内容を確認しました" ]</label></td>
  </tr>

  <tr>
    <td colspan="2"><div class="submit-btn">[submit "予約する"]</div><div class="submit-btn-notice"><span class="red">※返信は営業時間内(10:00-18:30。日月は定休日)に行っております。</span></div></td>
  </tr>
  </table>
</div>
