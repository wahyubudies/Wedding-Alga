<div>    
    <section class="bg-white">
        <div class="content-ucapan text-center p-4">
            <h4>Kirim Ucapan</h4>
            <img src="{{ asset('img/maps-flower.png') }}" alt="" data-aos="fade-up">
            <form wire:submit.prevent="submit" class="text-left my-4 mb-5">
                <div class="form-group">
                    <small class="mb-2 d-block">Nama Lengkap*</small>
                    <input type="text" class="form-control shadow-none" placeholder="ex: Muhammad Jailani">
                </div>
                <div class="form-group">
                    <small class="mb-2 d-block">Lokasi*</small>
                    <input type="text" class="form-control shadow-none" placeholder="ex: Kota Malang">
                </div>
                <div class="form-group mb-1">
                    <small class="mb-2 d-block">Kehadiran*</small>
                    <div class="d-flex flex-wrap">
                    <label class="container-radio d-flex align-items-center mr-3">hadir
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-radio d-flex align-items-center mr-3">akan hadir
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container-radio d-flex align-items-center">tidak hadir
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    </div>
                </div>
                <div class="form-group">
                    <small class="mb-2 d-block">Ucapan*</small>
                    <textarea name="" id="" cols="30" rows="10" class="form-control shadow-none" placeholder="ex: Semoga menjadi pasangan yang sakinah mawadah warahmah."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Kirim</button>
                </div>
            </form>

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
