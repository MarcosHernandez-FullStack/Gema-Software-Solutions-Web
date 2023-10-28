<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
    <div class="single-footer-widget">
        <div class="title">
            <h3>No ponemos en contacto</h3>
        </div>
        <form class="newsletter-form" wire:submit.prevent ="cargarData">
            <input wire:model.defer="email" type="email" name="email" placeholder="Correo electrónico" required="">
            <button class="btn-one" type="submit">
                <span class="txt">Enviar</span>
            </button>
            <div class="checked-box1">
                {{-- <input type="checkbox" name="newsletter-check" id="newsletter" checked=""> --}}
                <label for="newsletter" style="font-size: 13px; padding-left: inherit;">
                    {{-- <span></span> --}}Ingresa tu correo y nos comunicaremos contigo lo más breve posible. También puedes dejar un mensaje más detallado en <a href="">Contactanos</a>.
                </label>
            </div>
        </form>
    </div>
</div>