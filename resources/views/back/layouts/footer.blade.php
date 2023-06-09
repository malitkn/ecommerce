                  </div>
             </div>
         </div>
    </div>


<!-- plugins:js -->
<script src=" {{ asset('back/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->

<!-- inject:js -->
<script src=" {{ asset('back/assets/js/off-canvas.js')}}"></script>
<script src=" {{ asset('back/assets/js/hoverable-collapse.js')}}"></script>
<script src=" {{ asset('back/assets/js/misc.js')}}"></script>

<!-- endinject -->
<!-- End custom js for this page -->
<!-- Livewire -->
@livewireScripts
@stack('custom-footer')
</body>
</html>
