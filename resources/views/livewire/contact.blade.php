<div class="col-lg-8 col-md-6 col-sm-12">
        <div class="contact-form">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif

            <form wire:submit.prevent="save">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                            <input name="name" type="text" wire:model="name" class="form-control" id="name"
                                   placeholder="{{__('pages.Full Name')}}" required="">
                        </fieldset>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <fieldset>
                            <input name="email" type="email" wire:model="email" class="form-control" id="email"
                                   placeholder="{{__('pages.E-Mail Address')}}" required="">
                        </fieldset>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                                    <textarea name="message" rows="6" wire:model="message" class="form-control" id="message"
                                              placeholder="{{__('pages.Your Message')}}" required=""></textarea>
                        </fieldset>
                        @error('message')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <fieldset>
                            <button type="submit" id="form-submit" class="main-button">{{__('pages.Send Message')}}</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
