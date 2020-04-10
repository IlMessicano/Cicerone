@extends('layouts.app')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Hind:300,400');

        *, *:before, *:after {
            -webkit-box-sizing: inherit;
            box-sizing: inherit;
        }

        .container {
            margin: 0 auto;
            padding: 4rem;
            width: 48rem;
        }

        h3 {
            font-size: 1.75rem;
            color: #373d51;
            padding: 1.3rem;
            margin: 0;
        }

        .accordion a {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            padding: 1rem 3rem 1rem 1rem;
            color: #7288a2;
            font-size: 1.15rem;
            font-weight: 400;
            border-bottom: 1px solid #e5e5e5;
        }

        .accordion a:hover,
        .accordion a:hover::after {
            cursor: pointer;
            color: #03b5d2;
        }

        .accordion a:hover::after {
            border: 1px solid #03b5d2;
        }

        .accordion a.active {
            color: #03b5d2;
            border-bottom: 1px solid #03b5d2;
        }

        .accordion a::after {
            font-family: 'Ionicons';
            content: '\f218';
            position: absolute;
            float: right;
            right: 1rem;
            font-size: 1rem;
            color: #7288a2;
            padding: 5px;
            width: 30px;
            height: 30px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 1px solid #7288a2;
            text-align: center;
        }

        .accordion a.active::after {
            font-family: 'Ionicons';
            content: '\f209';
            color: #03b5d2;
            border: 1px solid #03b5d2;
        }

        .accordion .content {
            opacity: 0;
            padding: 0 1rem;
            max-height: 0;
            border-bottom: 1px solid #e5e5e5;
            overflow: hidden;
            clear: both;
            -webkit-transition: all 0.2s ease 0.15s;
            -o-transition: all 0.2s ease 0.15s;
            transition: all 0.2s ease 0.15s;
        }

        .accordion .content p {
            font-size: 1rem;
            font-weight: 300;
        }

        .accordion .content.active {
            opacity: 1;
            padding: 1rem;
            max-height: 100%;
            -webkit-transition: all 0.35s ease 0.15s;
            -o-transition: all 0.35s ease 0.15s;
            transition: all 0.35s ease 0.15s;
        }
    </style>

    <script>
        const items = document.querySelectorAll(".accordion a");

        function toggleAccordion(){
            this.classList.toggle('active');
            this.nextElementSibling.classList.toggle('active');
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>

    <div class="container">

        <h2>Frequently Asked Questions</h2>

        <div class="accordion">
            <div class="accordion-item">
                <a>Why is the moon sometimes out during the day?</a>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                </div>
            </div>
            <div class="accordion-item">
                <a>Why is the sky blue?</a>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                </div>
            </div>
            <div class="accordion-item">
                <a>Will we ever discover aliens?</a>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                </div>
            </div>
            <div class="accordion-item">
                <a>How much does the Earth weigh?</a>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                </div>
            </div>
            <div class="accordion-item">
                <a>How do airplanes stay up?</a>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                </div>
            </div>
        </div>

    </div>
@endsection
