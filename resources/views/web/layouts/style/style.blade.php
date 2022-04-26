<style>
    :root {
    --h1size: 50px;
    --h2size: 40px;
    --h3size: 24px;
    --h4size: 20px;
    --h5size: 18px;
    --h6size: 16px;
    --bodysize: 16px;
    --h1height: 58px;
    --h2height: 48px;
    --h3height: 32px;
    --h4height: 28px;
    --h5height: 26px;
    --h6height: 26px;
    --bodyheight: 26px;
    --pfamily: 'Rubik', sans-serif;
    --red: #ff3838;
    --red-opacity: #fff0f0;
    --gray: #777777;
    --text: #555555;
    --blue: #1494a9;
    --white: #ffffff;
    --black: #000000;
    --chalk: #f5f5f5;
    --green: #11b76b;
    --purple: #b12fad;
    --orange: #e86121;
    --yellow: #ffab10;
    --body: #f5f6f7;
    --border: #e8e8e8;
    --heading: #39404a;
    --primary: {{ setting('primary') }};
    --primary-opacity: {{ setting('secondary') }};
    --sub-heading: #565765;
    --green-chalk: #4b803f;
     --green-chalk-1: #accaa5;
    --green-dark: #072f17;
    --gray-chalk: #cccccc;
    --intro-bg: #f8fffa;
    --facebook: #3b5998;
    --linkedin: #0e76a8;
    --twitter: #00acee;
    --google: #E60023;
    --instagram: #F77737;
    --primary-bshadow: 0px 15px 35px 0px rgba(0, 0, 0, 0.1);
    --primary-tshadow: 2px 3px 8px rgba(0, 0, 0, 0.1)
}
{{ setting('css') }}

.product-disable {
    position: relative
}

.product-disable:hover {
    border-color: var(--border);
    -webkit-box-shadow: none;
    box-shadow: none
}

.product-disable:hover .product-add {
    color: var(--heading);
    background: var(--border)
}

.product-disable .product-widget {
    visibility: hidden
}

.product-disable::before {
    position: absolute;
    content: "@lang('words.sold_out')";
    top: 40%;
    left: 50%;
    z-index: 2;
    width: 100%;
    font-size: 15px;
    font-weight: 400;
    padding: 15px 0px;
    text-align: center;
    text-shadow: var(--primary-tshadow);
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    color: var(--white);
    background: var(--primary)
}
.product-disable::after {
    position: absolute;
    content: "";
    top: 0px;
    left: 0px;
    z-index: 1;
    width: 100%;
    height: 100%;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.6)
}
</style>
