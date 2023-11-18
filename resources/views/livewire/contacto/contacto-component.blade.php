
<section class="main-contact-form-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <div class="border-box"></div>
                <h3>Contáctanos</h3>
            </div>
            <h2>Escribe un mensaje</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-form">
                    <form id="contact-form" name="contact_form" class="default-form2">

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">

                                        <input wire:model="nombre" @error('nombre') class="error" @enderror type="text" name="nombre" id="nombre"
                                            placeholder="Nombre Completo">
                                            @error('nombre') <div class="invalido">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input wire:model="email" @error('email') class="error" @enderror type="email" name="email" id="email"
                                            placeholder="Correo Electrónico" >
                                            @error('email') <div class="invalido">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input wire:model="telefono" @error('telefono') class="error" @enderror type="text" name="telefono"
                                            value="" id="telefono" placeholder="Teléfono">
                                            @error('telefono') <div class="invalido">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input wire:model="asunto" @error('asunto') class="error" @enderror type="text" name="asunto"
                                            value="" id="asunto" placeholder="Asunto">
                                            @error('asunto')
                                                <div class="invalido">{{ $message }}</div>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <textarea wire:model="mensaje" @error('mensaje') class="error" @enderror name="mensaje" id="mensaje" placeholder="Escribe un mensaje"></textarea>
                                            @error('mensaje') <div class="invalido">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <div class="button-box">

                                    <button class="btn-one" type="button" wire:click ="save">
                                        <span class="txt">
                                            Enviar mensaje
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>