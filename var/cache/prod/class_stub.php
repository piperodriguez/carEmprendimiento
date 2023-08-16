<?php

class Connection extends ConnectionCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderDiscount extends OrderDiscountCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderDetail extends OrderDetailCore {};
class Order extends OrderCore {};
class OrderState extends OrderStateCore {};
class OrderMessage extends OrderMessageCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderSlip extends OrderSlipCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderReturn extends OrderReturnCore {};
class OrderCartRule extends OrderCartRuleCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
class TreeToolbar extends TreeToolbarCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class Tree extends TreeCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class ImageManager extends ImageManagerCore {};
class Category extends CategoryCore {};
class Access extends AccessCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class ProductAssembler extends ProductAssemblerCore {};
class CustomerPersister extends CustomerPersisterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
class FormField extends FormFieldCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class CustomerForm extends CustomerFormCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class Referrer extends ReferrerCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class ImageType extends ImageTypeCore {};
class Group extends GroupCore {};
class Cart extends CartCore {};
class LinkProxy extends LinkProxyCore {};
abstract class Cache extends CacheCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheApc extends CacheApcCore {};
class CacheXcache extends CacheXcacheCore {};
class Mail extends MailCore {};
class Link extends LinkCore {};
class Product extends ProductCore {};
class SearchEngine extends SearchEngineCore {};
class Store extends StoreCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Feature extends FeatureCore {};
class FeatureValue extends FeatureValueCore {};
class Carrier extends CarrierCore {};
class Country extends CountryCore {};
class ProductSale extends ProductSaleCore {};
class Delivery extends DeliveryCore {};
class Dispatcher extends DispatcherCore {};
class Address extends AddressCore {};
class GroupReduction extends GroupReductionCore {};
class Hook extends HookCore {};
class Customization extends CustomizationCore {};
class AddressFormat extends AddressFormatCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class Module extends ModuleCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
abstract class CarrierModule extends CarrierModuleCore {};
class AddressChecksum extends AddressChecksumCore {};
class CustomerThread extends CustomerThreadCore {};
class Cookie extends CookieCore {};
class Tag extends TagCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
class ShopGroup extends ShopGroupCore {};
class Shop extends ShopCore {};
class ShopUrl extends ShopUrlCore {};
class Uploader extends UploaderCore {};
class Guest extends GuestCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Tab extends TabCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class PDFGenerator extends PDFGeneratorCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class PDF extends PDFCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class QuickAccess extends QuickAccessCore {};
class ProductSupplier extends ProductSupplierCore {};
class Attribute extends AttributeCore {};
class Meta extends MetaCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class TaxCalculator extends TaxCalculatorCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class TaxRule extends TaxRuleCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class Tax extends TaxCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class Upgrader extends UpgraderCore {};
class Chart extends ChartCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class Translate extends TranslateCore {};
class Configuration extends ConfigurationCore {};
class SupplierAddress extends SupplierAddressCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class RequestSql extends RequestSqlCore {};
class Tools extends ToolsCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class Search extends SearchCore {};
class Contact extends ContactCore {};
class DateRange extends DateRangeCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CartChecksum extends CartChecksumCore {};
class CheckoutSession extends CheckoutSessionCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class AddressValidator extends AddressValidatorCore {};
class AttributeGroup extends AttributeGroupCore {};
class CustomerMessage extends CustomerMessageCore {};
class AdminController extends AdminControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
abstract class Controller extends ControllerCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class Combination extends CombinationCore {};
class Customer extends CustomerCore {};
class State extends StateCore {};
class RiskLang extends RiskLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class GenderLang extends GenderLangCore {};
class AttributeLang extends AttributeLangCore {};
class ThemeLang extends ThemeLangCore {};
class CarrierLang extends CarrierLangCore {};
class CategoryLang extends CategoryLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class ContactLang extends ContactLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class ProfileLang extends ProfileLangCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class MetaLang extends MetaLangCore {};
class TabLang extends TabLangCore {};
class GroupLang extends GroupLangCore {};
class FeatureLang extends FeatureLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class DataLang extends DataLangCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class WebserviceSpecificManagementAttachments extends WebserviceSpecificManagementAttachmentsCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class Context extends ContextCore {};
class CMSRole extends CMSRoleCore {};
class EmployeeSession extends EmployeeSessionCore {};
class Supplier extends SupplierCore {};
class Employee extends EmployeeCore {};
class PhpEncryption extends PhpEncryptionCore {};
class FileUploader extends FileUploaderCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class CMS extends CMSCore {};
class Manufacturer extends ManufacturerCore {};
class Currency extends CurrencyCore {};
class CustomizationField extends CustomizationFieldCore {};
class Profile extends ProfileCore {};
class Language extends LanguageCore {};
class DbPDO extends DbPDOCore {};
abstract class Db extends DbCore {};
class DbMySQLi extends DbMySQLiCore {};
class DbQuery extends DbQueryCore {};
class Pack extends PackCore {};
class FileLogger extends FileLoggerCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class Validate extends ValidateCore {};
class LocalizationPack extends LocalizationPackCore {};
class PhpEncryptionLegacyEngine extends PhpEncryptionLegacyEngineCore {};
class Zone extends ZoneCore {};
class Page extends PageCore {};
class CMSCategory extends CMSCategoryCore {};
class Windows extends WindowsCore {};
class CartRule extends CartRuleCore {};
class CustomerAddress extends CustomerAddressCore {};
class StockMvtWS extends StockMvtWSCore {};
class StockMvtReason extends StockMvtReasonCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class StockAvailable extends StockAvailableCore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
class Stock extends StockCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class SupplyOrder extends SupplyOrderCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class StockManager extends StockManagerCore {};
class Warehouse extends WarehouseCore {};
class StockMvt extends StockMvtCore {};
class RangeWeight extends RangeWeightCore {};
class RangePrice extends RangePriceCore {};
class Alias extends AliasCore {};
class CustomerSession extends CustomerSessionCore {};
class Media extends MediaCore {};
class ProductDownload extends ProductDownloadCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class Attachment extends AttachmentCore {};
class Notification extends NotificationCore {};
class JavascriptManager extends JavascriptManagerCore {};
class StylesheetManager extends StylesheetManagerCore {};
class CssMinifier extends CssMinifierCore {};
class CccReducer extends CccReducerCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class JsMinifier extends JsMinifierCore {};
class HelperKpi extends HelperKpiCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperView extends HelperViewCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperForm extends HelperFormCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class Helper extends HelperCore {};
class HelperUploader extends HelperUploaderCore {};
class HelperList extends HelperListCore {};
class HelperShop extends HelperShopCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class Risk extends RiskCore {};
class CSV extends CSVCore {};
class Curve extends CurveCore {};
class Message extends MessageCore {};
class SpecificPrice extends SpecificPriceCore {};
class Image extends ImageCore {};
abstract class ObjectModel extends ObjectModelCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class Gender extends GenderCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
