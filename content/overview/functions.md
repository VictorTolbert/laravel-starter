Bulma uses 3 custom functions to help define the values and colors dynamically:

- powerNumber($number, $exp): calculates the value of a number exposed to another one. Returns a number.
- colorLuminance($color): defines if a color is dark or light. Return a decimal number between 0 and 1 where <= 0.5 is dark and > 0.5 is light.
- findColorInvert($color): returns either 70% transparent black or 100% opaque white depending on the luminance of the color.

---

## The `findColorInvert()` function

The `findColorInvert($color)` function takes a **color** as an input, and outputs either transparent **black** `rgba(#000, 0.7)` or **white** `#fff`:

- if `colorLuminance($color) > 0.55`, it outputs `rgba(#000, 0.7)`
- otherwise, it outputs `#fff`

Its purpose is to guarantee a **readable** shade for the text when the input color is used as the _background_.

| color              | color luminance | findColorInvert()  | result |
|--------------------|-----------------|--------------------|--------|
| #00d1b2            | 0.52831         | #fff               | Button |
| #3273dc            | 0.23119         | #fff               | Button |
| #23d160            | 0.51067         | #fff               | Button |
| #ffdd57            | 0.76863         | rgba(0, 0, 0, 0.7) | Button |
| #ff3860            | 0.27313         | #fff               | Button |
| #ffb3b3            | 0.61796         | rgba(0,0,0,0.7)    | Button |
| #ffbc6b            | 0.63053         | rgba(0,0,0,0.7)    | Button |
| hsl(294, 71%, 79%) | 0.5529          | rgba(0,0,0,0.7)    | Button |

For colors that have a luminance close to the `0.55` threshold, it can be useful to **override** the `findColorInvert()` function, and rather set the invert color **manually**. 
For example, this shade of  purple has a color luminance of 0.5529. It can be preferable to set a color invert of white instead of transparent black:

|                        |                                            |                 |          |
|------------------------|--------------------------------------------|-----------------|----------|
| with findColorInvert() | $purple-invert: findColorInvert($purple)   | rgba(0,0,0,0.7) | Button   |
| with manual setting    | $purple-invert: #fff                       | #fff            | Button   |
