# PHP Semantic Versioning Checker Rules

The following documents all the rules currently checked by the [PHP Semantic Versioning Checker](https://github.com/tomzx/php-semver-checker).

**Note** In *italic* are the rules that are not implemented yet. Feel free to submit a PR if you implement any of them.

# Functions

Code | Level | Rule
-----|-------|-------
[V001](Ruleset/V001.md) | MAJOR | Function removed
[V002](Ruleset/V002.md) | MAJOR | Function parameter added
[V003](Ruleset/V003.md) | MINOR | Function added
[V004](Ruleset/V004.md) | PATCH | Function implementation changed
[V067](Ruleset/V067.md) | PATCH | Function parameter name changed
[V068](Ruleset/V068.md) | MAJOR | Function parameter removed
[V069](Ruleset/V069.md) | MAJOR | Function parameter typing added
[V070](Ruleset/V070.md) | MINOR | Function parameter typing removed
[V071](Ruleset/V071.md) | MINOR | Function parameter default added
[V072](Ruleset/V072.md) | MAJOR | Function parameter default removed
[V073](Ruleset/V073.md) | MINOR | Function parameter default value changed
[V160](Ruleset/V160.md) | PATCH | Function name case changed

# Classes

Code | Level | Rule
-----|-------|-------
[V005](Ruleset/V005.md) | MAJOR | Class removed
[V006](Ruleset/V006.md) | MAJOR | Class public method removed
[V007](Ruleset/V007.md) | MAJOR | Class protected method removed
[V008](Ruleset/V008.md) | MAJOR | Class public property removed
[V009](Ruleset/V009.md) | MAJOR | Class protected property removed
[V010](Ruleset/V010.md) | MAJOR | Class public method parameter added
[V011](Ruleset/V011.md) | MAJOR | Class protected method parameter added
[V012](Ruleset/V012.md) | MAJOR | *New public constructor (does not match supertype)*
[V013](Ruleset/V013.md) | MAJOR | *New protected constructor (does not match supertype)*
[V015](Ruleset/V015.md) | MAJOR | Class public method added
[V016](Ruleset/V016.md) | MAJOR | Class protected method added
[V019](Ruleset/V019.md) | MAJOR | Class public property added
[V020](Ruleset/V020.md) | MAJOR | Class protected property added
[V014](Ruleset/V014.md) | MINOR | Class added
[V017](Ruleset/V017.md) | MINOR | *Final class public method added*
[V018](Ruleset/V018.md) | MINOR | *Final class protected method added*
[V021](Ruleset/V021.md) | MINOR | *Final class protected method parameter added*
[V022](Ruleset/V022.md) | PATCH | *Final class protected method removed*
[V023](Ruleset/V023.md) | PATCH | [Final] Class public class method implementation changed
[V024](Ruleset/V024.md) | PATCH | [Final] Class protected class method implementation changed
[V025](Ruleset/V025.md) | PATCH | [Final] Class private class method implementation changed
[V026](Ruleset/V026.md) | PATCH | Class private property added
[V027](Ruleset/V027.md) | PATCH | Class private property removed
[V028](Ruleset/V028.md) | PATCH | Class private method added
[V029](Ruleset/V029.md) | PATCH | Class private method removed
[V030](Ruleset/V030.md) | PATCH | *Final class protected method added*
[V031](Ruleset/V031.md) | PATCH | Class private method parameter added
[V060](Ruleset/V060.md) | PATCH | Class public method parameter name changed
[V061](Ruleset/V061.md) | PATCH | Class protected method parameter name changed
[V062](Ruleset/V062.md) | PATCH | Class private method parameter name changed
[V080](Ruleset/V080.md) | ----- | *Final class public method parameter added*
[V081](Ruleset/V081.md) | ----- | *Final class private method parameter added*
[V082](Ruleset/V082.md) | MAJOR | Class public method parameter removed
[V083](Ruleset/V083.md) | MAJOR | Class protected method parameter removed
[V084](Ruleset/V084.md) | PATCH | Class private method parameter removed
[V085](Ruleset/V085.md) | MAJOR | Class public method parameter typing added
[V086](Ruleset/V086.md) | MAJOR | Class protected method parameter typing added
[V087](Ruleset/V087.md) | PATCH | Class private method parameter typing added
[V088](Ruleset/V088.md) | MAJOR | Class public method parameter typing removed
[V089](Ruleset/V089.md) | MAJOR | Class protected method parameter typing removed
[V090](Ruleset/V090.md) | PATCH | Class private method parameter typing removed
[V091](Ruleset/V091.md) | MINOR | Class public method parameter default added
[V092](Ruleset/V092.md) | MINOR | Class protected method parameter default added
[V093](Ruleset/V093.md) | PATCH | Class private method parameter default added
[V094](Ruleset/V094.md) | MAJOR | Class public method parameter default removed
[V095](Ruleset/V095.md) | MAJOR | Class protected method parameter default removed
[V096](Ruleset/V096.md) | PATCH | Class private method parameter default removed
[V097](Ruleset/V097.md) | MAJOR | Class public method parameter default value changed
[V098](Ruleset/V098.md) | MAJOR | Class protected method parameter default value changed
[V099](Ruleset/V099.md) | PATCH | Class private method parameter default value changed
[V150](Ruleset/V150.md) | PATCH | Class public method name case changed
[V156](Ruleset/V156.md) | PATCH | Class protected method name case changed
[V157](Ruleset/V157.md) | PATCH | Class private method name case changed
[V154](Ruleset/V154.md) | PATCH | Class name case changed
VXXX | MAJOR | *Final class public method parameter added*
VXXX | MAJOR | *Final class protected method parameter added*
VXXX | PATCH | *Final class private method parameter added*
VXXX | MAJOR | *Final class public method parameter removed*
VXXX | MAJOR | *Final class protected method parameter removed*
VXXX | PATCH | *Final class private method parameter removed*
VXXX | MAJOR | *Final class public method parameter typing added*
VXXX | MAJOR | *Final class protected method parameter typing added*
VXXX | PATCH | *Final class private method parameter typing added*
VXXX | ????? | *Final class public method parameter typing removed*
VXXX | ????? | *Final class protected method parameter typing removed*
VXXX | PATCH | *Final class private method parameter typing removed*
VXXX | ????? | *Final class public method parameter default added*
VXXX | ????? | *Final class protected method parameter default added*
VXXX | PATCH | *Final class private method parameter default added*
VXXX | ????? | *Final class public method parameter default removed*
VXXX | ????? | *Final class protected method parameter default removed*
VXXX | PATCH | *Final class private method parameter default removed*
VXXX | ????? | *Final class public method parameter default value changed*
VXXX | ????? | *Final class protected method parameter default value changed*
VXXX | PATCH | *Final class private method parameter default value changed*


# Interface

Code | Level | Rule
-----|-------|-------
[V032](Ruleset/V032.md) | MINOR | Interface added
[V033](Ruleset/V033.md) | MAJOR | Interface removed
[V034](Ruleset/V034.md) | MAJOR | Interface method added
[V035](Ruleset/V035.md) | MAJOR | Interface method removed
[V036](Ruleset/V036.md) | MAJOR | Interface method parameter added
[V063](Ruleset/V063.md) | PATCH | Interface method parameter name changed
[V074](Ruleset/V074.md) | MAJOR | Interface method parameter removed
[V075](Ruleset/V075.md) | MAJOR | Interface method parameter typing added
[V076](Ruleset/V076.md) | MAJOR | Interface method parameter typing removed
[V077](Ruleset/V077.md) | MINOR | Interface method parameter default added
[V078](Ruleset/V078.md) | MAJOR | Interface method parameter default removed
[V079](Ruleset/V079.md) | MAJOR | Interface method parameter default value changed
[V151](Ruleset/V151.md) | PATCH | Interface method name case changed
[V153](Ruleset/V153.md) | PATCH | Interface name case changed

# Trait

Code | Level | Rule
-----|-------|-------
[V037](Ruleset/V037.md) | MAJOR | Trait removed
[V038](Ruleset/V038.md) | MAJOR | Trait public method removed
[V039](Ruleset/V039.md) | MAJOR | Trait protected method removed
[V040](Ruleset/V040.md) | MAJOR | Trait public property removed
[V041](Ruleset/V041.md) | MAJOR | Trait protected property removed
[V042](Ruleset/V042.md) | MAJOR | Trait public method parameter added
[V043](Ruleset/V043.md) | MAJOR | Trait protected method parameter added
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
[V051](Ruleset/V051.md) | ----- | *REMOVED*
[V052](Ruleset/V052.md) | PATCH | Trait public method implementation changed
[V053](Ruleset/V053.md) | PATCH | Trait protected method implementation changed
[V054](Ruleset/V054.md) | PATCH | Trait private method implementation changed
[V059](Ruleset/V059.md) | MAJOR | Trait private method parameter added
[V064](Ruleset/V064.md) | PATCH | Trait public method parameter name changed
[V065](Ruleset/V065.md) | PATCH | Trait protected method parameter name changed
[V066](Ruleset/V066.md) | PATCH | Trait private method parameter name changed
[V100](Ruleset/V100.md) | MAJOR | Trait public method parameter removed
[V101](Ruleset/V101.md) | MAJOR | Trait protected method parameter removed
[V102](Ruleset/V102.md) | MAJOR | Trait private method parameter removed
[V103](Ruleset/V103.md) | MAJOR | Trait public method parameter typing added
[V104](Ruleset/V104.md) | MAJOR | Trait protected method parameter typing added
[V105](Ruleset/V105.md) | MAJOR | Trait private method parameter typing added
[V106](Ruleset/V106.md) | MAJOR | Trait public method parameter typing removed
[V107](Ruleset/V107.md) | MAJOR | Trait protected method parameter typing removed
[V108](Ruleset/V108.md) | MAJOR | Trait private method parameter typing removed
[V109](Ruleset/V109.md) | MINOR | Trait public method parameter default added
[V110](Ruleset/V110.md) | MINOR | Trait protected method parameter default added
[V111](Ruleset/V111.md) | MINOR | Trait private method parameter default added
[V112](Ruleset/V112.md) | MAJOR | Trait public method parameter default removed
[V113](Ruleset/V113.md) | MAJOR | Trait protected method parameter default removed
[V114](Ruleset/V114.md) | MAJOR | Trait private method parameter default removed
[V115](Ruleset/V115.md) | MAJOR | Trait public method parameter default value changed
[V116](Ruleset/V116.md) | MAJOR | Trait protected method parameter default value changed
[V117](Ruleset/V117.md) | MAJOR | Trait private method parameter default value changed
[V152](Ruleset/V152.md) | PATCH | Trait public method name case changed
[V158](Ruleset/V158.md) | PATCH | Trait protected method name case changed
[V159](Ruleset/V159.md) | PATCH | Trait private method name case changed
[V155](Ruleset/V155.md) | PATCH | Trait name case changed

