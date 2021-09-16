<div>    
    <section class="bg-white">
        <div class="content-ucapan text-center p-4">
            <h4>Kirim Ucapan</h4>
            <img src="{{ asset('img/maps-flower.webp') }}" alt="" data-aos="fade-up">
            <form wire:submit.prevent="submit" class="text-left my-4 mb-5">
                <div class="form-group">
                    <small class="mb-2 d-block">Nama Lengkap*</small>
                    <input wire:model.defer="name" type="text" class="form-control shadow-none" placeholder="ex: Muhammad Jailani">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <small class="mb-2 d-block">Lokasi*</small>
                    <input wire:model.defer="location" type="text" class="form-control shadow-none" placeholder="ex: Kota Malang">
                    @error('location') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group mb-1">
                    <small class="mb-2 d-block">Kehadiran*</small>
                    <div class="d-flex flex-wrap">
                        <label class="container-radio d-flex align-items-center mr-3">hadir
                            <input type="radio" wire:model.defer="attendance" value="0" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-radio d-flex align-items-center mr-3">akan hadir
                            <input type="radio" wire:model.defer="attendance" value="1" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-radio d-flex align-items-center">tidak hadir
                            <input type="radio" wire:model.defer="attendance" value="2" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    @error('attendance') <small class="text-danger">{{ $message }}</small> @enderror
                </div>                
                <div class="form-group">
                    <small class="mb-2 d-block">Ucapan*</small>
                    <textarea wire:model.defer="text" name="" id="" cols="30" rows="10" class="form-control shadow-none" placeholder="ex: Semoga menjadi pasangan yang sakinah mawadah warahmah."></textarea>
                    @error('text') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <button type="submit">Kirim</button>
                </div>
            </form>
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show text-left" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="scroll-ucapan p-4">
            @forelse($greetings as $greeting)
            <div class="card-ucapan text-left mb-3">
                <div class="header-card-ucapan d-flex align-items-center mb-4">
                <div>
                    <p class="mb-0"><b>{{ $greeting->name }}</b></p>
                    <span class="badge badge-pill {{ ($greeting->attendance === 0 ? 'badge-success' : ($greeting->attendance === 1 ? 'badge-warning' : 'badge-danger') ) }}">{{ ($greeting->attendance === 0 ? 'Hadir' : ($greeting->attendance === 1 ? 'Akan Hadir' : 'Tidak Hadir') ) }}</span>
                    <span>di {{ $greeting->location }}</span>
                </div>
                </div>  
                <div class="body-card-ucapan">
                <p>{{ $greeting->text }}</p>
                </div>
            </div>
            @empty
                <div class="card-ucapan text-left mb-3">
                    <p>No Records yet.</p>
                </div>
            @endforelse
            </div>

        </div>
    </section>
</div>
