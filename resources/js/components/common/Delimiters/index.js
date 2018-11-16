import React from "react";
import Rounded from "./components/Rounded";
import Circle from "./components/Circle";
import Corner from "./components/Corner";
import Curve from "./components/Curve";
import Trapezoid from "./components/Trapezoid";
import Triangle from "./components/Triangle";

const Delimiters = props => {
  const { rounded, circle, corner, curve, trapezoid, triangle } = props;
  let delimiter = null;
  if (rounded) {
    delimiter = <Rounded />;
  } else if (circle) {
    delimiter = <Circle />;
  } else if (corner) {
    delimiter = <Corner />;
  } else if (curve) {
    delimiter = <Curve />;
  } else if (trapezoid) {
    delimiter = <Trapezoid />;
  } else if (triangle) {
    delimiter = <Triangle />;
  }

  return <React.Fragment>{delimiter}</React.Fragment>;
};

export default Delimiters;
