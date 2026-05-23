<div class="modal fade" id="modalHapus" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:420px;">
        <div class="modal-content" style="border-radius:16px; border:none; overflow:hidden;">

            <div style="height:6px; background:linear-gradient(to right,#e53935,#ff6b6b);"></div>

            <div class="modal-body" style="padding:2rem 2rem 1.5rem; text-align:center;">

                <div style="width:72px; height:72px; border-radius:50%; background:#fff0f0;
                            display:flex; align-items:center; justify-content:center;
                            margin:0 auto 1.25rem;">
                    <i class="bi bi-trash3-fill" style="font-size:30px; color:#e53935;"></i>
                </div>

                <h5 style="font-weight:700; margin-bottom:8px; color:#1a1a1a;">Hapus User?</h5>

                <p style="color:#777; font-size:14px; margin-bottom:1.75rem; line-height:1.6;">
                    Data user <strong style="color:#333;" id="namaUserHapus">ini</strong> akan dihapus
                    secara permanen dan tidak bisa dikembalikan.
                </p>

                <form action="" method="POST" id="formHapus">
                    @csrf
                    @method('DELETE')
                    <div style="display:flex; gap:10px; justify-content:center;">
                        <button type="button" data-bs-dismiss="modal" 
                            style="flex:1; padding:10px; border:1px solid #ddd; background:white;
                                   border-radius:8px; cursor:pointer; font-size:14px;
                                   color:#555; font-family:'Poppins',sans-serif;">
                            Batal
                        </button>

                        <button type="submit" 
                            style="flex:1; padding:10px; border:none;
                                   background:linear-gradient(to right,#e53935,#ff6b6b);
                                   color:white; border-radius:8px; cursor:pointer;
                                   font-size:14px; font-weight:600; font-family:'Poppins',sans-serif;
                                   box-shadow:0 4px 12px rgba(229,57,53,.35);">
                            <i class="bi bi-trash3" style="margin-right:6px;"></i>Ya, Hapus
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>