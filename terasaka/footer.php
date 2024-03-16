<footer class="footer">
  <div class="footer-group">
    <div class="w-embed">
      <style>
      .schedule-table {
        border-collapse: separate;
        border-spacing: 0px 10px;
        width: 100%;
        table-layout: fixed;
        margin-bottom: 10px;
      }

      .schedule-table-title {
        width: 240px;
        padding-bottom: 6px;
      }

      .schedule-table-head {
        font-weight: 600;
        padding-bottom: 6px;
      }

      .schedule-table-time {
        padding: 16px 20px 16px 32px;
        font-size: 20px;
        color: #709BB0;
        text-align: center;
        background-color: #FFFFFF;
        border-radius: 60px 0px 0px 60px;
      }

      .schedule-table-icon {
        padding: 14px 0px 14px 0px;
        font-size: 22px;
        color: #709BB0;
        background-color: #FFFFFF;
      }

      .last-round-background {
        border-radius: 0px 60px 60px 0px;
      }

      .sunday {
        width: 12%;
      }

      .small {
        font-size: 14px;
        color: #2A3036;
      }

      .as-white {
        color: #FFFFFF;
      }

      .as-black {
        color: #2A3036;
      }

      @media screen and (max-width:768px) {
        .schedule-table {
          margin-bottom: 4px;
        }

        .schedule-table-title {
          width: 220px;
        }

        .schedule-table-time {
          font-size: 18px;
        }

        .schedule-table-icon {
          font-size: 18px;
        }

        .last-round-background {}

        .small {
          font-size: 12px;
        }
      }

      @media screen and (max-width:480px) {
        .schedule-table {
          margin-bottom: 2px;
        }

        .schedule-table-head {
          font-size: 14px;
        }

        .schedule-table-title {
          width: 130px;
          font-size: 14px;
        }

        .schedule-table-time {
          padding: 8px 0px 8px 4px;
          font-size: 16px;
        }

        .schedule-table-icon {
          font-size: 14px;
        }

        .last-round-background {}

        .small {
          font-size: 12px;
        }
      }
      </style>
      <table class="schedule-table">
        <tr class="tr">
          <th class="schedule-table-title as-white">診療時間</th>
          <td class="schedule-table-head as-white">月</td>
          <td class="schedule-table-head as-white">火</td>
          <td class="schedule-table-head as-white">水</td>
          <td class="schedule-table-head as-white">木</td>
          <td class="schedule-table-head as-white">金</td>
          <td class="schedule-table-head as-white">土</td>
          <td class="schedule-table-head as-white">日</td>
        </tr>
        <tr class="tr">
          <th class="schedule-table-time as-black">9:00～13:00<br><span class="small">（受付終了12:30）</span></th>
          <td class="schedule-table-icon as-black">ー</td>
          <td class="schedule-table-icon as-black">●</td>
          <td class="schedule-table-icon as-black">●</td>
          <td class="schedule-table-icon as-black">●</td>
          <td class="schedule-table-icon as-black">●</td>
          <td class="schedule-table-icon as-black">●</td>
          <td class="schedule-table-icon as-black last-round-background">ー</td>
        </tr>
        <tr class="tr">
          <th class="schedule-table-time as-black">14:30〜18:00<br><span class="small">（受付終了17:30）</span></th>
          <td class="schedule-table-icon as-black">ー</td>
          <td class="schedule-table-icon as-black">●</td>
          <td class="schedule-table-icon as-black">●</td>
          <td class="schedule-table-icon as-black">●</td>
          <td class="schedule-table-icon as-black">●</td>
          <td class="schedule-table-icon as-black">●</td>
          <td class="schedule-table-icon as-black last-round-background">ー</td>
        </tr>
      </table>
    </div>
    <p class="footer-schedule-closed-day">休診日／月曜・日曜・祝日</p>
    <div class="footer-tel"><img src="<?php echo get_template_directory_uri(); ?>/images/Icon_Tel.svg" loading="lazy"
        alt="電話アイコン" class="footer-tel-icon">
      <p class="footer-tel-number">092-402-1225</p>
    </div>
    <p class="footer-p">福岡県福岡市東区箱崎3-5-42 エフタス2F</p>
    <div class="footer-dr-file">

      <a href="https://doctorsfile.jp/h/215176/df/1/" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/tera_dr_file.jpg" loading="lazy" alt="ドクターズ・ファイル">
      </a>
    </div>
  </div>
</footer>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6513ad1d65f9155c513290be"
  type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/webflow.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>

</html>