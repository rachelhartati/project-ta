<!-- Modal Tambah Barang -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <!-- HEADER -->
            <div class="modal-header">
                <h5 class="modal-title fw-bold">Tambah User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- FORM -->
            <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama lengkap"
                                name="nama_lengkap" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" placeholder="Masukkan alamat" name="alamat"
                                required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">No Telepon</label>
                            <input type="text" class="form-control" placeholder="Masukkan no telepon" name="no_tlp">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Agent</label>
                            <select class="form-select" name="agent_id">
                                <option value="" disabled selected>Pilih agent</option>
                                {{-- <option value="1">Agent 1</option> --}}
                                {{-- @foreach($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->nama }}</option>
                                @endforeach --}}
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan password" name="password"
                                required>
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

                <!-- FOOTER -->
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
