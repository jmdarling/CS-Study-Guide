<?php
/**
 * An example of an algorithm that has a time complexity of O(n^2).
 */
function on2(paragraph) {
  foreach (paragraph as sentence) {
    foreach (sentence as word) {
      echo(word);
    }
  }
}
