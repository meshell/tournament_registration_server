# language: en
Feature: Hello World feature
  As a developer starting a new project
  I want to have a dummy feature test
  In order to get started and know that the toolchain works

Scenario: Says Hello World
  Given a hello dummy
  When I command the dummy to say hello
  Then the dummy should say "hello world"
