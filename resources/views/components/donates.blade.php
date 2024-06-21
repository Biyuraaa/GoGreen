<div id="donate-popup" class="donate-popup">
  <div class="close-donate theme-btn">
    <span class="fa fa-close"></span>
  </div>
  <div class="popup-inner">
    <div class="container">
      <div class="donate-form-area">
        <h2>Donation Information</h2>
        <h4>How much would you like to donate:</h4>
        <form action="{{ route('blogs.donation', $blog) }}" method="POST" class="donate-form default-form">
          @csrf
          <input type="hidden" name="wallet_id" value="{{ Auth::user()->wallet->id }}">
          <input type="hidden" name="blog_id" value="{{ $blog->id }}">
          <ul class="chicklet-list clearfix">
            <li>
              <input type="radio" id="donate-amount-1" name="amount" value="1000" />
              <label for="donate-amount-1">$1000</label>
            </li>
            <li>
              <input type="radio" id="donate-amount-2" name="amount" value="2000" checked />
              <label for="donate-amount-2">$2000</label>
            </li>
            <li>
              <input type="radio" id="donate-amount-3" name="amount" value="3000" />
              <label for="donate-amount-3">$3000</label>
            </li>
            <li>
              <input type="radio" id="donate-amount-4" name="amount" value="4000" />
              <label for="donate-amount-4">$4000</label>
            </li>
            <li>
              <input type="radio" id="donate-amount-5" name="amount" value="5000" />
              <label for="donate-amount-5">$5000</label>
            </li>
            <li class="other-amount">
              <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                <span>Or</span>
                <input type="text" id="other-amount" name="other_amount" placeholder="Other Amount" />
              </div>
            </li>
          </ul>
          <div class="center mt-5">
            <button class="btn-one" type="submit">Donate Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  document.querySelector('form').addEventListener('submit', function(e) {
    const otherAmountInput = document.getElementById('other-amount');
    if (otherAmountInput.value) {
      const radioButtons = document.querySelectorAll('input[name="amount"]');
      radioButtons.forEach(rb => rb.checked = false);
      const hiddenInput = document.createElement('input');
      hiddenInput.type = 'hidden';
      hiddenInput.name = 'amount';
      hiddenInput.value = otherAmountInput.value;
      this.appendChild(hiddenInput);
    }
  });
</script>
