import React from "react";

const Circle = () => {
  return (
    <div
      className="bg__style delimiter__circle all-light pt-100 pb-50 mt-80 position-relative"
      style={{ backgroundImage: `url(img/bg-1920_1.jpg)` }}
      
    >
      <span className="overlay__delimiter-before">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 235.85">
          <defs>
            <style>
              {`.a1 {fill: #fff;
                        fill-rule: evenodd;}`}
            </style>
          </defs>
          <path
            className="a1"
            d="M1920,235.85S1576.38,109.42,960,109.42,0,235.85,0,235.85V0H1920Z"
          />
        </svg>
      </span>
      <span className="overlay__delimiter-after brk-base-bg-gradient-50deg-a" />
      <div className="container">
        <div
          className="services__wrapper-main services__wrapper-honeycomb active__effect-main  all-light mt-0"
          
        >
          <div className="row">
            <div className="col-lg-4">
              <div className="services__wrapper active__effect text-center">
                <div className="icon__cover">
                  <button
                    className="icon__btn icon__btn-anim icon__btn-sm"
                    
                  >
                    <span className="before" />
                    <i className="fa fa-trophy" aria-hidden="true" />
                    <span className="after" />
                  </button>
                </div>
                <p className="font__family-open-sans font__weight-light font__size-14 text-uppercase letter-spacing-60">
                  We are Awesome
                </p>
                <h4 className="font__family-montserrat font__weight-light font__size-24 text-uppercase">
                  <span className="font__family-montserrat-alt font__weight-regular">
                    We are
                  </span>
                  cool
                </h4>
                <span className="divide" />
                <p className="font__family-open-sans font__size-14 main-text">
                  Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                  eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                  vitae, eleifend ac, enim.
                </p>
                <a
                  href="javascript:void(0)"
                  className="btn btn-width font__family-open-sans font__weight-bold font__size-16 mt-30"
                >
                  <span>Read more</span>
                </a>
              </div>
            </div>
            <div className="col-lg-4">
              <div className="services__wrapper active__effect active current center text-center">
                <div className="icon__cover">
                  <button
                    className="icon__btn icon__btn-anim icon__btn-sm"
                    
                  >
                    <span className="before" />
                    <i className="fa fa-trophy" aria-hidden="true" />
                    <span className="after" />
                  </button>
                </div>
                <p className="font__family-open-sans font__weight-light font__size-14 text-uppercase letter-spacing-60">
                  We are Awesome
                </p>
                <h4 className="font__family-montserrat font__weight-light font__size-24 text-uppercase">
                  <span className="font__family-montserrat-alt font__weight-regular">
                    We are
                  </span>
                  cool
                </h4>
                <span className="divide" />
                <p className="font__family-open-sans font__size-14 main-text">
                  Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                  eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                  vitae, eleifend ac, enim.
                </p>
                <a
                  href="javascript:void(0)"
                  className="btn btn-width font__family-open-sans font__weight-bold font__size-16 mt-30"
                >
                  <span>Read more</span>
                </a>
              </div>
            </div>
            <div className="col-lg-4">
              <div className="services__wrapper active__effect text-center">
                <div className="icon__cover">
                  <button
                    className="icon__btn icon__btn-anim icon__btn-sm"
                    
                  >
                    <span className="before" />
                    <i className="fa fa-trophy" aria-hidden="true" />
                    <span className="after" />
                  </button>
                </div>
                <p className="font__family-open-sans font__weight-light font__size-14 text-uppercase letter-spacing-60">
                  We are Awesome
                </p>
                <h4 className="font__family-montserrat font__weight-light font__size-24 text-uppercase">
                  <span className="font__family-montserrat-alt font__weight-regular">
                    We are
                  </span>
                  cool
                </h4>
                <span className="divide" />
                <p className="font__family-open-sans font__size-14 main-text">
                  Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                  eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                  vitae, eleifend ac, enim.
                </p>
                <a
                  href="javascript:void(0)"
                  className="btn btn-width font__family-open-sans font__weight-bold font__size-16 mt-30"
                >
                  <span>Read more</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <span className="overlay_after" />
    </div>
  );
};

export default Circle;
