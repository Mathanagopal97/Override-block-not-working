# Magento2: Override block not working

This repository contains the code that should work in order to override a block in **Magento 2**

The mistakes you have done is -
1. In di.xml, you have given the type to be ```type="AXAStudios\Customer\Block\AuthorizationLink"``` but it should be ```type="AXAStudios\Customer\Block\Account\AuthorizationLink"```

2. In your block file you are rewriting the constructor, which is not recommended. Everything that class needs is already given by the parent. If you want any other classes then it is best yoou use the object manager instead of rewriting the constructor. Also, when overriding a block, just focus on the function that you need to override rather than overriding the functions that is not neccesarily needed to be overriden.

This repository will be visible for 1 week after which I will close this repo. If you want extended access, then mention it in the comment.
