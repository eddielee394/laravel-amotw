import React from "react";

const Corner = () => {
  return (
    <div>
      <span className="overlay__delimiter-before">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlnsXlink="http://www.w3.org/1999/xlink"
          viewBox="0 0 1920 266.56"
        >
          <defs>
            <style>
              {`.a4, .b4, .e4 {fill: none;}
                    
                        .b4 {stroke: #fff;
                            stroke-miterlimit: 10;
                            stroke-width: 0.25px;}
                    
                        .c4, .d4, .e4 {fill - rule: evenodd;}
                    
                        .c4 {fill: url(#a4);}
                    
                        .d4 {fill: #fff;}`}
            </style>
            <pattern
              id="a4"
              width="5"
              height="5"
              patternUnits="userSpaceOnUse"
              viewBox="0 0 5 5"
            >
              <rect className="a4" width="5" height="5" />
              <line className="b4" x1="10" y1="5" x2="5" y2="10" />
              <line className="b4" x1="5" y1="5" y2="10" />
              <line className="b4" y1="5" x2="-5" y2="10" />
              <line className="b4" x1="10" x2="5" y2="5" />
              <line className="b4" x1="5" y2="5" />
              <line className="b4" x2="-5" y2="5" />
              <line className="b4" x1="10" y1="-5" x2="5" />
              <line className="b4" x1="5" y1="-5" />
              <line className="b4" y1="-5" x2="-5" />
            </pattern>
          </defs>
          <title>delimiter-5_2</title>
          <polygon
            className="c4"
            points="1380 93 545 79 0 10 0 155 1920 155 1380 93"
          />
          <path className="d4" d="M1375,93,1920,0V266.56H0V155Z" />
          <path className="e4" d="M1375,93,1920,0V155H0Z" />
          <path className="e4" d="M1375,93,1920,0V155H0Z" />
        </svg>
      </span>

      <span className="overlay__delimiter-after" />

      <div className="container">
        <div className="row">
          <div className="col-lg-12 text-center">
            <h2 className="font__family-montserrat font__weight-semibold font__size-120 line__height-60 after-heading">
              OUR APP
            </h2>
            <img src="img/app-inside-0.png" alt="ipad" className="d-inline" />
          </div>
        </div>
      </div>
    </div>
  );
};

export default Corner;
