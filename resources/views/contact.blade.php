@extends('layout.master')

@section('content')
    <!-- Header -->
    <header id="header" class="alt">
        <div class="logo"><a href="{{url('')}}">Portfolio <span>by GERBEN PUT</span></a></div>
        <a href="#menu">Menu</a>
    </header>

    <!-- One -->
    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <p>Want to know more?</p>
                <h2>CONTACT ME</h2>
            </header>
        </div>
    </section>
    <!-- Main -->
    <section id="one" class="wrapper style2 fade-in one">
        <div class="inner2">
            <div data-aos="fade-up-right" data-aos-delay="700">
                <div class="box">


                    <!-- Form -->
                    <h3>Contact form</h3>

                    <form method="POST" action="{{ url('contact') }}">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="formmargin">
                            <div class="formmargin2">
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                       placeholder="Name"/>


                                @if($errors->any('name'))
                                    @foreach($errors->get('name') as $error)
                                        {{ $error }}<br>
                                    @endforeach
                                @endif
                            </div>
                            <div class="formmargin2">
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                       placeholder="Email"/>

                                @if($errors->any('email'))
                                    @foreach($errors->get('email') as $error)
                                        {{ $error }}<br>
                                    @endforeach
                                @endif
                            </div>
                            <!-- Break -->
                            <div class="formmargin2">
                                <input type="checkbox" id="copy"
                                       name="email_copy" {{ (old('email_copy') ? 'checked' : '') }}>
                                <label for="copy">Email me a copy of this message</label>

                                @if($errors->any('email_copy'))
                                    @foreach($errors->get('email_copy') as $error)
                                        {{ $error }}<br>
                                    @endforeach
                                @endif
                            </div>
                            <div class="formmargin2">
                                <input type="checkbox" id="human" name="robot">
                                <label for="human">I am not a robot</label>

                                @if($errors->any('robot'))
                                    @foreach($errors->get('robot') as $error)
                                        {{ $error }}<br>
                                    @endforeach
                                @endif
                            </div>
                            <!-- Break -->
                            <div class="formmargin2">
                                        <textarea name="message" id="message" placeholder="Enter your message"
                                                  rows="6">{{ old('message') }}</textarea>

                                @if($errors->any('message'))
                                    @foreach($errors->get('message') as $error)
                                        {{ $error }}<br>
                                    @endforeach
                                @endif
                            </div>
                            <!-- Break -->
                            <div class="formmargin2">
                                <input class="formmargin3" type="submit" value="Send Message" disabled id="sendButton"/>
                                <input class="formmargin3 alt" type="reset" value="Reset"/></li>
                                @if(session()->has('success'))
                                    <button class="formmargin3 alt2" type="button"
                                            disabled>{{ session()->get('success') }}</button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('scripts')
    <script>
        $('#human').change(function () {
            console.log(!this.checked);
            // $('#sendButton').disabled = !this.checked;
            if (!this.checked) {
                $('#sendButton').attr('disabled', 'disabled');
            } else {
                $('#sendButton').removeAttr('disabled');
            }
        });
    </script>
@endsection
