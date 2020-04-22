<button class="hamburger" type="button" aria-label="Menu" aria-controls="navigation">
  <span class="hamburger-box"></span>
</button>


<style>
.hamburger {

  position: fixed;
  top: 23px;
  right: 4.2*$unit;
  z-index: 100;
  padding: 15px;
  display: inline-block;
  cursor: pointer;
  transform: translate3d(0,0,0);
  transition: opacity .3s ease, visibility .3s ease;

  font: inherit;
  color: inherit;
  text-transform: none;
  background-color: transparent;
  border: 0;
  margin: 0;
  overflow: visible;

  @include media($mobile){
    top: 10px;
    right: 9px;
  }


  &.hamburger--white {

    .hamburger-box {
      color: $white;
    }
  }

}


.has-cover.has-dark-cover{

    .hamburger{
      .hamburger-box {
        color: $white;
      }
    }

    .arrow.arrow--left {
      color: $white;
    }

}



.hamburger-box  {
    $size: 20px;
    height: 24px;
    width: $size;
    position: relative;
    box-sizing: border-box;
    line-height: $size;
    display: inline-block;
    color: $black;



    transition: color .3s ease;

    &:before, &:after {
        $width: 20px;
        $height: 3px;
        content: '';
        position: absolute;
        top: 7px;
        left: 50%;
        margin-top: -$height/2;
        margin-left: -$width/2;
        display: block;
        height: $height;
        width: $width;
        border-radius: 2px;
        transform-origin: center center;
        background-color: currentColor;
        transition: top 0.1s cubic-bezier(0.215, 0.61, 0.355, 1) .25s, transform .25s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
    }

    &:after {
        top: 19px;
    }

    .is-active & {

        color: $white;

        &:before, &:after {
          top: 50%;
          transition: top 0.1s cubic-bezier(0.215, 0.61, 0.355, 1) 0s, transform .25s cubic-bezier(0.215, 0.61, 0.355, 1) .1s;
        }

        &:before {

          transform: rotate(45deg);
        }

        &:after {
          transform: rotate(-45deg);
        }

    }
}

</style>
