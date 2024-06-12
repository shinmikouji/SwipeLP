<!-- Open Google Tag Manager -->
<script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-M4W36TR');
</script>
<!-- End Google Tag Manager -->

<!-- open Pinterest Tag -->
<script>
  !function(e){if(!window.pintrk){window.pintrk = function () {
  window.pintrk.queue.push(Array.prototype.slice.call(arguments))};var
    n=window.pintrk;n.queue=[],n.version="3.0";var
    t=document.createElement("script");t.async=!0,t.src=e;var
    r=document.getElementsByTagName("script")[0];
    r.parentNode.insertBefore(t,r)}}("https://s.pinimg.com/ct/core.js");
  pintrk('load', '2613387956841', {em: '<user_email_address>'});
  pintrk('page');
</script>
<noscript>
  <img height="1" width="1" style="display:none;" alt="" src="https://ct.pinterest.com/v3/?event=init&tid=2613387956841&pd[em]=<hashed_email_address>&noscript=1" />
</noscript>
<!-- End Pinterest Tag -->

<!-- Open Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $meta['ga_id']; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', '<?php echo $meta['ga_id']; ?>');
</script>
<!-- End Global site tag (gtag.js) - Google Analytics -->

<!-- Open gclid nomal -->
<script>
  function getParam(p) {
  var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
  return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
  }

  function getExpiryRecord(value) {
  var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // 90 日の有効期限、単位はミリ秒

  var expiryDate = new Date().getTime() + expiryPeriod;
  return {
  value: value,
  expiryDate: expiryDate
  };
  }

  function addGclid() {
  var gclidParam = getParam('gclid');
  var gclidFormFields = ['gclid_field', '00N5h000007W6pa']; // ここに使用可能なすべての GCLID のフォーム項目の ID を挿入
  var gclidRecord = null;
  var currGclidFormField;

  var gclsrcParam = getParam('gclsrc');
  var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;

  gclidFormFields.forEach(function (field) {
  if (document.getElementById(field)) {
  currGclidFormField = document.getElementById(field);
  }
  });

  if (gclidParam && isGclsrcValid) {
  gclidRecord = getExpiryRecord(gclidParam);
  localStorage.setItem('gclid', JSON.stringify(gclidRecord));
  }

  var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
  var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;

  if (currGclidFormField && isGclidValid) {
  currGclidFormField.value = gclid.value;
  }
  }

  window.addEventListener('load', addGclid);
</script>
<!-- End gclid nomal -->