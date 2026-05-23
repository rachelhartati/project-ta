<!-- Modal Edit User -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <!-- HEADER -->
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- FORM -->
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap"
                                placeholder="Masukkan nama lengkap" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">No Telepon</label>
                            <input type="text" class="form-control" name="no_tlp" placeholder="Masukkan no telepon"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Agent</label>
                            <select class="form-select" name="agent_id">
                                <option value="" disabled selected>Pilih agent</option>
                                <option value="1">Agent 1</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password"
                                placeholder="Kosongkan jika tidak diubah">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status">
                                <option value="" disabled selected>Pilih status</option>
                                <option value="1">Aktif</option>
                                <option value="0">Non-Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i> Save
                    </button>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
