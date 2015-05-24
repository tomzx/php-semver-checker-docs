# PHP Semantic Versioning Checker Rules

The following documents all the rules currently checked by the [PHP Semantic Versioning Checker](https://github.com/tomzx/php-semver-checker).

**Note** In *italic* are the rules that are not implemented yet (but are planned to be supported).

# Functions

Code | Level | Rule
-----|-------|-------
[V001](Ruleset/V001.md) | MAJOR | Function removed
[V002](Ruleset/V002.md) | MAJOR | Function parameter changed
[V003](Ruleset/V003.md) | MINOR | Function added
[V004](Ruleset/V004.md) | PATCH | Function implementation changed
[V067](Ruleset/V067.md) | PATCH | Function parameter name changed

# Classes

Code | Level | Rule
-----|-------|-------
[V005](Ruleset/V005.md) | MAJOR | Class removed
[V006](Ruleset/V006.md) | MAJOR | Class public method removed
[V007](Ruleset/V007.md) | MAJOR | Class protected method removed
[V008](Ruleset/V008.md) | MAJOR | Class public property removed
[V009](Ruleset/V009.md) | MAJOR | Class protected property removed
[V010](Ruleset/V010.md) | MAJOR | Class public method parameter changed
[V011](Ruleset/V011.md) | MAJOR | Class protected method parameter changed
[V012](Ruleset/V012.md) | MAJOR | *New public constructor (does not match supertype)*
[V013](Ruleset/V013.md) | MAJOR | *New protected constructor (does not match supertype)*
[V015](Ruleset/V015.md) | MAJOR | Class public method added
[V016](Ruleset/V016.md) | MAJOR | Class protected method added
[V019](Ruleset/V019.md) | MAJOR | Class public property added
[V020](Ruleset/V020.md) | MAJOR | Class protected property added
[V014](Ruleset/V014.md) | MINOR | Class added
[V017](Ruleset/V017.md) | MINOR | *Final class public method added*
[V018](Ruleset/V018.md) | PATCH | *Final class protected method added*
[V021](Ruleset/V021.md) | PATCH | *Final class protected method parameter changed*
[V022](Ruleset/V022.md) | PATCH | *Final class protected method removed*
[V023](Ruleset/V023.md) | PATCH | [Final] Class public class method implementation changed
[V024](Ruleset/V024.md) | PATCH | [Final] Class protected class method implementation changed
[V025](Ruleset/V025.md) | PATCH | [Final] Class private class method implementation changed
[V026](Ruleset/V026.md) | PATCH | Class private property added
[V027](Ruleset/V027.md) | PATCH | Class private property removed
[V028](Ruleset/V028.md) | PATCH | Class private method added
[V029](Ruleset/V029.md) | PATCH | Class private method removed
[V030](Ruleset/V030.md) | PATCH | *Final class protected method added*
[V031](Ruleset/V031.md) | PATCH | Class private method parameter changed
[V060](Ruleset/V060.md) | PATCH | Class public method parameter name changed
[V061](Ruleset/V061.md) | PATCH | Class protected method parameter name changed
[V062](Ruleset/V062.md) | PATCH | Class private method parameter name changed

# Interface

Code | Level | Rule
-----|-------|-------
[V032](Ruleset/V032.md) | MINOR | Interface added
[V033](Ruleset/V033.md) | MAJOR | Interface removed
[V034](Ruleset/V034.md) | MAJOR | Interface method added
[V035](Ruleset/V035.md) | MAJOR | Interface method removed
[V036](Ruleset/V036.md) | MAJOR | Interface method parameter changed
[V063](Ruleset/V063.md) | PATCH | Interface method parameter name changed

# Trait

Code | Level | Rule
-----|-------|-------
[V037](Ruleset/V037.md) | MAJOR | Trait removed
[V038](Ruleset/V038.md) | MAJOR | Trait public method removed
[V039](Ruleset/V039.md) | MAJOR | Trait protected method removed
[V040](Ruleset/V040.md) | MAJOR | Trait public property removed
[V041](Ruleset/V041.md) | MAJOR | Trait protected property removed
[V042](Ruleset/V042.md) | MAJOR | Trait public method parameter changed
[V043](Ruleset/V043.md) | MAJOR | Trait protected method parameter changed
[V044](Ruleset/V044.md) | MAJOR | *New public constructor (does not match supertype)*
[V045](Ruleset/V045.md) | MAJOR | *New protected constructor (does not match supertype)*
[V047](Ruleset/V047.md) | MAJOR | Trait public method added
[V048](Ruleset/V048.md) | MAJOR | Trait protected method added
[V049](Ruleset/V049.md) | MAJOR | Trait public property added
[V050](Ruleset/V050.md) | MAJOR | Trait protected property added
[V055](Ruleset/V055.md) | MAJOR | Trait private property added
[V056](Ruleset/V056.md) | MAJOR | Trait private property removed
[V057](Ruleset/V057.md) | MAJOR | Trait private method added
[V058](Ruleset/V058.md) | MAJOR | Trait private method removed
[V046](Ruleset/V046.md) | MINOR | Trait added
[V051](Ruleset/V051.md) | MINOR | *REMOVED*
[V052](Ruleset/V052.md) | PATCH | Trait public method implementation changed
[V053](Ruleset/V053.md) | PATCH | Trait protected method implementation changed
[V054](Ruleset/V054.md) | PATCH | Trait private method implementation changed
[V059](Ruleset/V059.md) | PATCH | Trait private method parameter changed
[V064](Ruleset/V064.md) | PATCH | Trait public method parameter name changed
[V065](Ruleset/V065.md) | PATCH | Trait protected method parameter name changed
[V066](Ruleset/V066.md) | PATCH | Trait private method parameter name changed
