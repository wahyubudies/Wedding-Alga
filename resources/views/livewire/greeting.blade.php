<div>    
    <section class="bg-white">
        <div class="content-ucapan text-center p-4">
            <h4>Kirim Ucapan</h4>
            <img src="{{ asset('img/maps-flower.png') }}" alt="" data-aos="fade-up">
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
            {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> --}}
            <div class="scroll-ucapan p-4">
            @for($i = 1; $i < 10; $i++)
            <div class="card-ucapan text-left mb-3">
                <div class="header-card-ucapan d-flex align-items-center mb-4">
                <div>
                    <p class="mb-0"><b>Bu Opik</b></p>
                    <span class="badge badge-pill badge-success">Hadir</span>
                    <span>Di Temanggung</span>
                </div>
                </div>  
                <div class="body-card-ucapan">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, magni eos facilis porro provident alias quod voluptatem placeat, quibusdam iste cupiditate, nesciunt sed vitae hic? Corrupti praesentium atque possimus recusandae.</p>
                </div>
            </div>
            @endfor
            </div>

        </div>
    </section>
</div>
