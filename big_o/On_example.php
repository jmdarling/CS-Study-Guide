<?php
/**
 * An example of an algorithm that has a time complexity of O(n).
 */

function on(list) {
  foreach (list as item) {
    echo(item);
  }

  foreach (list as item) {
    echo(item + " is rad!");
  }
}
