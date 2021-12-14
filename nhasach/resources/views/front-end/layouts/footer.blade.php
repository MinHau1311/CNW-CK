@include('front-end.layouts.button')
<form action="{{ route('cart.add') }}" id="data-form-add-to-cart" method="POST">
  {{ csrf_field() }}
  <input id="qty" type="number"  name="qty" value="1" min="1" max="100" hidden>
  <input id="data-input-add-to-cart" type="text"  name="txtBookId" value="" hidden min="1" max="100">
</form>
<footer class="page-footer" >
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text"></h5>
        <p class="grey-text text-lighten-4">
        </p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text"></h5>
        <ul>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    </div>
  </div>
</footer>